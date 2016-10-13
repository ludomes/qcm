
<!DOCTYPE html>

<html>
	<head>
		<meta charset="ISO-8859-1">
		<link rel="stylesheet" href="style.css" />
		<title>Accueil QCM</title>
	</head>
	
	<?php
		//Créer un dossier 'import'
		$filenameImport = md5(uniqid(rand(), true));
		$dossierImport = 'import';
		if(!is_dir($dossierImport)){
			mkdir($dossierImport, 0777, true);
		}
	?>

	<body>
		<h1>Accueil QCM</h1>
		
<form method="post" action="reception.php" enctype="multipart/form-data">
<label for="icone">Icône du fichier (JPG, PNG ou GIF | max. 15 Ko) :</label><br />
<input type="file" name="icone" id="icone" /><br />
<label for="mon_fichier">Fichier (tous formats | max. 1 Mo) :</label><br />
<input type="hidden" name="MAX_FILE_SIZE" value="1048576" />
<input type="file" name="mon_fichier" id="mon_fichier" /><br />
<label for="titre">Titre du fichier (max. 50 caractères) :</label><br />
<input type="text" name="titre" value="Titre du fichier" id="titre" /><br />
<label for="description">Description de votre fichier (max. 255 caractères) :</label><br />
<textarea name="description" id="description"></textarea><br />
<input type="submit" name="submit" value="Envoyer" />
</form>



	</body>
</html>