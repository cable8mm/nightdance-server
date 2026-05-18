# AI Agent Guidelines for Project: Nightdance

## 1. Project Overview & Current Stack

- **Legacy Stack:** PHP 5.6 / CakePHP 2.x
- **Target Stack:** PHP 8.x / CakePHP 2.x (Community patched)
- **Environment:** Laravel Herd (macOS) - `nightdance.test`
- **Current Status:** Framework core (`lib/Cake`) is updated via composer.
- **Migration Strategy:** Instead of relying on legacy loaders, all application files (`app/`) are being renamed to **PascalCase** to strictly comply with **PSR-4 / PSR-0** coding standards for modern Composer Autoloading in PHP 8.

## 2. Composer & Autoloading Rules

- **Autoloader Integration:** The project MUST explicitly load the Composer autoloader within `app/Config/bootstrap.php`:

```php
// app/Config/bootstrap.php
if (file_exists(ROOT . DS . 'vendor' . DS . 'autoload.php')) {
    require ROOT . DS . 'vendor' . DS . 'autoload.php';
}
```

- **Strict Naming Convention (PSR-4/PascalCase):**
  - All application file names must be in **PascalCase** (e.g., `PostsController.php` instead of `posts_controller.php`, `UserProfile.php` instead of `user_profile.php`).
  - **Rule for AI:** When suggesting file creations, modifications, or references, always assume the file structure has been modernized to PascalCase. Do not generate or use legacy snake_case file names.

## 3. Immediate Fix Targets (Current Issues)

### 3.1 Bootstrapping / Configure Error

- **Symptom:** `Warning: Undefined array key "Error"/"Exception" in Configure.php`
- **Cause:** PHP 8 strictly warns about undefined array keys. CakePHP 2's default `core.php` configuration structure needs explicit null-coalescing or array key definitions before `Configure::read()` is processed.
- **Rule:** Ensure `Configure::write('Error', ...)` and `Configure::write('Exception', ...)` are properly structured in `app/Config/core.php`.

### 3.2 View Helper Crash

- **Symptom:** `Fatal error: Call to a member function charset() on null in default.ctp`
- **Cause:** Calling legacy style `$html->charset()`.
- **Rule:** Rewrite all legacy global helper variables in View templates to CamelCase properties of the View instance.
  - Old: `$html->charset()` -> New: `$this->Html->charset()`
  - Old: `$form->create()` -> New: `$this->Form->create()`
  - Old: `$session->flash()` -> New: `$this->Session->flash()`

## 4. Coding Standards for PHP 8 Migration

- **Do NOT upgrade to CakePHP 3+ or 4+:** Maintain the core CakePHP 2.x architectural logic, but use modernized file naming.
- **Defensive Coding:** Always use `isset()`, `??`, or `empty()` when accessing array keys within Controllers and Models to prevent PHP 8 Fatal/Warning errors.
- **Signature Matching:** Overridden methods (e.g., `beforeFilter`, `beforeFind`, `__construct`) must strictly match CakePHP 2's parent signatures.

## 5. Output Format

- Provide clear `diff` formats or specific code blocks for modifications.
- Do not rewrite entire files unless explicitly requested.
