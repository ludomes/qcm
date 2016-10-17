<?php


	$dossier = 'import/';
	$fichier = basename($_FILES['mon_fichier']['name']);
	$taille_maxi = 1000000;
	$taille = filesize($_FILES['mon_fichier']['tmp_name']);
	$extensions = array('.txt');
	$extension = strrchr($_FILES['mon_fichier']['name'], '.');
	
	//Début des vérifications de sécurité...
	if(!in_array($extension, $extensions)) {
		$erreur = 'Vous devez uploader un fichier txt';
	}
	
	if($taille>$taille_maxi) {
		$erreur = 'Le fichier est trop gros...';
	}
	
	if(!isset($erreur))	{
		//On formate le nom du fichier ici...
		//$fichier =  md5(uniqid(rand(), true));
		$fichier = 'import.txt'
	if(move_uploaded_file($_FILES['mon_fichier']['tmp_name'], $dossier . $fichier)) {
		echo 'Upload effectué avec succès !';
	}
	else {
		echo 'Echec de l\'upload !';
	}
}

else {
	echo $erreur;
}
	
?>