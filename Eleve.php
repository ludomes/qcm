<!DOCTYPE html>

<html>
	<head>
		<meta charset="ISO-8859-1">
		<link rel="stylesheet" href="style.css" />
		<title>QCM</title>
	</head>
	
	<body>
		<p><?php echo $_POST['prenom'].' '.$_POST['nom']; ?></p>
		
		<div id="questionnaire">
  			<ul id="onglets">
				<?php
					for($i = 0; $i < 20; $i++)
					{
						echo '<li><a href=\"'.$i.'\">'.$i.'</a></li>';
					}
				?>
  			</ul>
		</div>
		
		<script>
			var centi=0 // initialise les dixti�mes
			var secon=0 //initialise les secondes
			var minu=0 //initialise les minutes

			function chrono()
			{
				centi++; //incr�mentation des dixi�mes de 1
				if(centi>9)
				{
					centi=0;secon++
				} //si les dixi�mes > 9, on les r�initialise � 0 et on incr�mente les secondes de 1
				if(secon>59)
				{
					secon=0;minu++
				} //si les secondes > 59, on les r�initialise � 0 et on incr�mente les minutes de 1
				document.forsec.secc.value=" "+centi //on affiche les dixi�mes
				document.forsec.seca.value=" "+secon //on affiche les secondes
				document.forsec.secb.value=" "+minu //on affiche les minutes
				compte=setTimeout('chrono()',100) //la fonction est relanc�e tous les 10� de secondes
			}

			function rasee()
			{ //fonction qui remet les compteurs � 0
				clearTimeout(compte) //arr�te la fonction chrono()
				centi=0;
				secon=0;
				minu=0;
				document.forsec.secc.value=" "+centi
				document.forsec.seca.value=" "+secon
				document.forsec.secb.value=" "+minu
			}

		</script>						
	</body>
</html>