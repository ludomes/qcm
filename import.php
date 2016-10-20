<?php
	include database.php;

	// uploader le fichier.
	function uploadFichier () {
		$dossier = 'import/';
		$fichier =  md5(uniqid(rand(), true));
		$taille_maxi = 1000000;
		$taille = filesize($_FILES['mon_fichier']['tmp_name']);
		$extensions = array('.txt');
		$extension = strrchr($_FILES['mon_fichier']['name'], '.');
		
		//Début des vérifications de sécurité...
		if(!in_array($extension, $extensions)) {
			$erreur = 'Vous devez uploader un fichier .txt';
		}
		
		if($taille>$taille_maxi) {
			$erreur = 'Le fichier est trop gros...';
		}
		
		if(!isset($erreur))	{
			if(move_uploaded_file($_FILES['mon_fichier']['tmp_name'], $dossier . $fichier)) {
				echo 'Upload effectué avec succès !\n';
			}
			else {
				echo 'Echec de l\'upload !';
				return null;
			}
		}
		
		else {
			echo $erreur;
			return null;
		}
		
		return $dossier . $fichier;
	}
	
	// insere le fichier selon le formattage voulu dans la base de donnée.
	function insertFichier () {
		/*Ouverture du fichier en lecture seule*/
		$handle = fopen('/path/file.txt', 'r');
		/*Si on a réussi à ouvrir le fichier*/
		if ($handle)
		{
			/*Tant que l'on est pas à la fin du fichier*/
			while (!feof($handle))
			{
				/*On lit la ligne courante*/
				$buffer = fgets($handle);
				/*On l'affiche*/
				echo $buffer;
			}
			/*On ferme le fichier*/
			fclose($handle);
		}
		return true;
	}
	
	
	$result = uploadFichier();
	if ($result != null) 
		echo 'le fichier ' .$result .'\nUpload effectué avec succès !';
	database ();





	
?>