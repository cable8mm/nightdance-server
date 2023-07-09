<?php
class MaestrosController extends AppController {

        var $name = 'Maestros';
        var $scaffold;

        function beforeFilter() {
			parent::beforeFilter();
			$this->Auth->allowedActions = array('install', 'upload', 'upload_adimg');
        }

        function login() {
            //Auth Magic
        }
         
        function logout() {
            //Leave empty for now.
            $this->redirect($this->Auth->logout());
        }

        function install() {
			if($this->Maestro->find('count') == 0) {
					if (!empty($this->data)) {
							$this->Maestro->create();
							if ($this->Maestro->save($this->data)) {
									$this->Session->setFlash(__('The Maestro has been saved', true));
							} else {
									$this->Session->setFlash(__('The Maestro could not be saved. Please, try again.', true));
							}
					}
					$maestroGroups = $this->Maestro->MaestroGroup->find('list');
					$this->set(compact('maestroGroups'));
			} else {
					$this->redirect($this->Auth->loginAction);
			}
        }

	function upload() {
		Configure::write('debug', 0);
		if (!empty($_FILES)) {
			$uploadPath = '/home/cms2/c_banners/';
			$httpUploadPath = isset($_REQUEST['prefix'])? $_REQUEST['prefix'] : '';
			$filename = preg_replace('/[^A-Za-z0-9\._-]/u', '', $_FILES['Filedata']['name']);
			$fileParts = pathinfo($filename);
//			$targetPath = $uploadPath . $_REQUEST['folder'];
			$targetPath = $uploadPath;
			$tempFile = $_FILES['Filedata']['tmp_name'];
//			$wwwTargetPath = $httpUploadPath . $_REQUEST['folder'];
			$wwwTargetPath = $httpUploadPath;
			
			$tmpFilename = $filename;
			$i = 0;
			while(file_exists($targetPath.$tmpFilename)){
				$sname = substr($filename, 0, strrpos($filename, ".")).'_'.$i++;
				$sext = substr($filename, strrpos($filename, "."));
				$tmpFilename = $sname.$sext;
			}
			$filename = $tmpFilename;
			
			$targetFile =  str_replace('//','/',$targetPath) . $filename;

			// $fileTypes  = str_replace('*.','',$_REQUEST['fileext']);
			// $fileTypes  = str_replace(';','|',$fileTypes);
			// $typesArray = split('\|',$fileTypes);
			// $fileParts  = pathinfo($_FILES['Filedata']['name']);
			
			// if (in_array($fileParts['extension'],$typesArray)) {
				// Uncomment the following line if you want to make the directory if it doesn't exist
				// mkdir(str_replace('//','/',$targetPath), 0755, true);
				
				move_uploaded_file($tempFile,$targetFile);
				popen("/usr/bin/rsync  -avz --delete /home/cms2/c_banners/* 114.111.55.3:/var/www/html_adimg/c", "r");
				$response = array(
					'name' => $wwwTargetPath . $filename,
				);
				echo json_encode($response);
			// } else {
			// 	echo 'Invalid file type.';
			// }
		}
		exit;
		echo '<form action="" method="POST" enctype="multipart/form-data"><input type="hidden" name="creative_id" value="2" /><input type="file" name="Filedata" size="chars" /><input type="submit" name="submit" value="submit" /></form>';
		exit;
	}

	function upload_adimg() {
		Configure::write('debug', 0);
		if (!empty($_FILES)) {
			$uploadPath = '/home/cms2/flash/2009/';
			$httpUploadPath = isset($_REQUEST['prefix'])? $_REQUEST['prefix'] : '';
			$filename = preg_replace('/[^A-Za-z0-9\._-]/u', '', $_FILES['Filedata']['name']);
			$fileParts = pathinfo($filename);
//			$targetPath = $uploadPath . $_REQUEST['folder'];
			$targetPath = $uploadPath;
			$tempFile = $_FILES['Filedata']['tmp_name'];
//			$wwwTargetPath = $httpUploadPath . $_REQUEST['folder'];
			$wwwTargetPath = $httpUploadPath;
			
			$tmpFilename = $filename;
			$i = 0;
			while(file_exists($targetPath.$tmpFilename)){
				$sname = substr($filename, 0, strrpos($filename, ".")).'_'.$i++;
				$sext = substr($filename, strrpos($filename, "."));
				$tmpFilename = $sname.$sext;
			}
			$filename = $tmpFilename;
			
			$targetFile =  str_replace('//','/',$targetPath) . $filename;

			// $fileTypes  = str_replace('*.','',$_REQUEST['fileext']);
			// $fileTypes  = str_replace(';','|',$fileTypes);
			// $typesArray = split('\|',$fileTypes);
			// $fileParts  = pathinfo($_FILES['Filedata']['name']);
			
			// if (in_array($fileParts['extension'],$typesArray)) {
				// Uncomment the following line if you want to make the directory if it doesn't exist
				// mkdir(str_replace('//','/',$targetPath), 0755, true);
				
				move_uploaded_file($tempFile,$targetFile);
				popen("/usr/bin/rsync  -avz --delete /home/cms2/flash/2009/* 114.111.55.3:/var/www/html_adimg/f/2009", "r");
				$response = array(
					'name' => $wwwTargetPath . $filename,
				);
				echo json_encode($response);
			// } else {
			// 	echo 'Invalid file type.';
			// }
		}
		exit;
		echo '<form action="" method="POST" enctype="multipart/form-data"><input type="hidden" name="creative_id" value="2" /><input type="file" name="Filedata" size="chars" /><input type="submit" name="submit" value="submit" /></form>';
		exit;
	}
}
?>