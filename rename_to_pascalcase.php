#!/usr/bin/env php
<?php
/**
 * PHP CLI script to safely rename snake_case PHP files in CakePHP 2.x app/ to PascalCase.
 * Aligns with PSR-4 / PSR-0 standards and preserves Git history using `git mv`.
 *
 * Usage:
 *   Dry-run (safe preview):
 *     php rename_to_pascalcase.php
 *
 *   Execute rename:
 *     php rename_to_pascalcase.php --execute
 */

// Define target directories and excluded directories relative to root
define('WORKSPACE_DIR', __DIR__);
define('TARGET_DIR', WORKSPACE_DIR . DIRECTORY_SEPARATOR . 'app');

// Excluded subdirectories from scanning to prevent breaking configurations or temporary files
$excludedDirs = [
    TARGET_DIR . DIRECTORY_SEPARATOR . 'tmp',
    TARGET_DIR . DIRECTORY_SEPARATOR . 'webroot',
    TARGET_DIR . DIRECTORY_SEPARATOR . 'Config',
    TARGET_DIR . DIRECTORY_SEPARATOR . 'Locale',
];

// Target folders inside 'app' where classes are typically stored
$classDirectories = [
    'Controller',
    'Model',
    'Component',
    'Behavior',
    'helpers',
    'Helper',
    'Vendor',
    'Shell',
    'Command',
    'Task'
];

// Determine if we should execute or just dry-run
$dryRun = true;
if (isset($argv[1]) && $argv[1] === '--execute') {
    $dryRun = false;
}

echo "\n======================================================================\n";
echo "           Nightdance CakePHP 2.x PascalCase Renaming Tool            \n";
echo "======================================================================\n";
echo "Mode: " . ($dryRun ? "\033[1;33mDRY-RUN (No changes will be made)\033[0m" : "\033[1;31mEXECUTE (Files will be renamed!)\033[0m") . "\n";
echo "Directory: " . TARGET_DIR . "\n";
echo "======================================================================\n\n";

if (!is_dir(TARGET_DIR)) {
    echo "\033[0;31mError: Target directory '" . TARGET_DIR . "' does not exist.\033[0m\n";
    exit(1);
}

/**
 * Parses class, interface, or trait name from a PHP file using tokens.
 */
function getClassNameFromFile($filePath) {
    if (!is_file($filePath)) {
        return null;
    }
    $content = file_get_contents($filePath);
    try {
        $tokens = token_get_all($content);
    } catch (\Throwable $e) {
        return null;
    }
    
    $count = count($tokens);
    for ($i = 0; $i < $count; $i++) {
        if ($tokens[$i][0] === T_CLASS || $tokens[$i][0] === T_INTERFACE || (defined('T_TRAIT') && $tokens[$i][0] === T_TRAIT)) {
            // Check if this is "class" or similar and not a class constant / anonymous class
            // Find next T_STRING token before '{' or ';'
            for ($j = $i + 1; $j < $count; $j++) {
                if ($tokens[$j][0] === T_STRING) {
                    return $tokens[$j][1];
                }
                if ($tokens[$j] === '{' || $tokens[$j] === ';') {
                    break;
                }
            }
        }
    }
    return null;
}

/**
 * Converts snake_case to PascalCase.
 */
function snakeToPascal($filename) {
    $base = pathinfo($filename, PATHINFO_FILENAME);
    $ext = pathinfo($filename, PATHINFO_EXTENSION);
    $parts = explode('_', $base);
    $parts = array_map('ucfirst', $parts);
    return implode('', $parts) . ($ext ? '.' . $ext : '');
}

/**
 * Performs git mv or standard rename.
 */
function executeRename($oldPath, $newPath, $dryRun) {
    if ($oldPath === $newPath) {
        return true;
    }
    
    $oldName = basename($oldPath);
    $newName = basename($newPath);
    
    echo "• \033[0;36m" . $oldName . "\033[0m -> \033[1;32m" . $newName . "\033[0m\n";
    
    if ($dryRun) {
        return true;
    }
    
    // Check if tracked by Git
    $isTracked = false;
    $output = [];
    $returnVar = -1;
    exec("git ls-files --error-unmatch " . escapeshellarg($oldPath) . " 2>/dev/null", $output, $returnVar);
    if ($returnVar === 0) {
        $isTracked = true;
    }
    
    if ($isTracked) {
        // Attempt git mv
        $mvOutput = [];
        $mvReturnVar = -1;
        exec("git mv " . escapeshellarg($oldPath) . " " . escapeshellarg($newPath) . " 2>&1", $mvOutput, $mvReturnVar);
        if ($mvReturnVar === 0) {
            echo "  \033[0;32m[SUCCESS] Git Move completed.\033[0m\n";
            return true;
        } else {
            echo "  \033[0;33m[WARNING] Git Move failed. Falling back to standard rename. Error: " . implode(' ', $mvOutput) . "\033[0m\n";
        }
    }
    
    // Fallback to standard PHP rename
    // Ensure parent directory of new path exists (should exist)
    $newDir = dirname($newPath);
    if (!is_dir($newDir)) {
        mkdir($newDir, 0755, true);
    }
    
    if (rename($oldPath, $newPath)) {
        echo "  \033[0;32m[SUCCESS] File renamed successfully.\033[0m\n";
        return true;
    } else {
        echo "  \033[0;31m[ERROR] Failed to rename file!\033[0m\n";
        return false;
    }
}

// Start scanning
$iterator = new RecursiveDirectoryIterator(TARGET_DIR, RecursiveDirectoryIterator::SKIP_DOTS);
$files = new RecursiveIteratorIterator($iterator, RecursiveIteratorIterator::SELF_FIRST);

$renameCount = 0;
$skippedCount = 0;

foreach ($files as $file) {
    if (!$file->isFile()) {
        continue;
    }
    
    $filePath = $file->getRealPath();
    $extension = strtolower($file->getExtension());
    
    // Skip non-PHP files (as requested: skip .ctp, only .php)
    if ($extension !== 'php') {
        continue;
    }
    
    // Check if file is in an excluded directory
    $isExcluded = false;
    foreach ($excludedDirs as $exDir) {
        if (strpos($filePath, $exDir) === 0) {
            $isExcluded = true;
            break;
        }
    }
    if ($isExcluded) {
        continue;
    }
    
    $dirName = dirname($filePath);
    $fileName = basename($filePath);
    
    // 1. Try parsing class name
    $className = getClassNameFromFile($filePath);
    
    $targetNewName = null;
    if ($className) {
        $targetNewName = $className . '.php';
    } else {
        // 2. Fallback: If inside target class directories, convert snake_case to PascalCase
        $inClassDir = false;
        foreach ($classDirectories as $classDir) {
            if (strpos($dirName, DIRECTORY_SEPARATOR . $classDir) !== false) {
                $inClassDir = true;
                break;
            }
        }
        
        if ($inClassDir) {
            $targetNewName = snakeToPascal($fileName);
        }
    }
    
    if ($targetNewName && $targetNewName !== $fileName) {
        $newPath = $dirName . DIRECTORY_SEPARATOR . $targetNewName;
        
        // Safety check: Avoid overwriting existing files if not matching
        if (file_exists($newPath) && strtolower($newPath) !== strtolower($filePath)) {
            echo "  \033[0;31m[SKIP] Target file already exists: " . basename($newPath) . " (Cannot rename " . $fileName . ")\033[0m\n";
            $skippedCount++;
            continue;
        }
        
        executeRename($filePath, $newPath, $dryRun);
        $renameCount++;
    }
}

echo "\n======================================================================\n";
echo "Summary:\n";
echo "  Total Files Renamed/Identified: " . $renameCount . "\n";
if ($skippedCount > 0) {
    echo "  Total Files Skipped due to conflict: " . $skippedCount . "\n";
}
echo "======================================================================\n";

if ($dryRun) {
    echo "\n\033[1;33mTip:\033[0m To perform the actual rename operation, run:\n";
    echo "    \033[1;36mphp rename_to_pascalcase.php --execute\033[0m\n\n";
} else {
    echo "\n\033[1;32mRenaming complete!\033[0m\n\n";
}
