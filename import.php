<?php
	//Créer un dossier 'import'
	if (($_FILES['mon_fichier']['name'] != '')) {
		$filenameImport = md5(uniqid(rand(), true));
		$dossierImport = 'import';
		if(!is_dir($dossierImport)){
			mkdir($dossierImport, 0777, true);
		}
		echo 'le fichier est : '.$_FILES['mon_fichier']['name'];
	}
	
?>

		

		
