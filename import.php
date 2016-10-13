
<!DOCTYPE html>

<html>
	<head>
		<meta charset="ISO-8859-1">
		<link rel="stylesheet" href="style.css" />
		<title>Import d'un Questionnaire</title>
	</head>
		
	<body>
		<h1>Importation d'un Questionnaire</h1>
	
		<?php
			//Créer un dossier 'import'
			if (!($monfichier == '')) {
				$filenameImport = md5(uniqid(rand(), true));
				$dossierImport = 'import';
				if(!is_dir($dossierImport)){
					mkdir($dossierImport, 0777, true);
				}
				echo 'le fichier est : '.$_FILES['mon_fichier']['name'];
			}
			
		?>
		
		

		
		<form method="post" action="import.php" enctype="multipart/form-data">
			<label for="mon_fichier">Fichier (tous formats | max. 1 Mo) :</label><br />
			<input type="hidden" name="MAX_FILE_SIZE" value="1048576" />
			<input type="file" name="mon_fichier" id="mon_fichier" /><br /> <br /> <br />
			<input type="submit" name="submit" value="Envoyer" />
		</form>



	</body>
</html>