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
			var minutes = 0
			var secondes = 0

			function chrono()
			{
				if(secondes > 59)
				{
					secondes = 0;
					minutes++;
				}
				document.getElementById("chronotime").innerHTML = minutes + ":" + secondes
			} 
			timer=setInterval("chrono()", 1000);
					
			

		</script>
		
		
						
	</body>
</html>