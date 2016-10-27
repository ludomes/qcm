<!DOCTYPE html>

<html>
	<head>
		<meta charset="ISO-8859-1">
		<link rel="stylesheet" href="style.css" />
		<title>QCM</title>
		<script type="text/Javascript">
			var startTime = 0
			var start = 0
			var end = 0
			var diff = 0
			var timerID = 0
			window.onload = chronoStart;
			
			function chrono()
			{
				end = new Date()
				diff = end - start
				diff = new Date(diff)
				var msec = diff.getMilliseconds()
				var sec = diff.getSeconds()
				var min = diff.getMinutes()
				var hr = diff.getHours()-1
				if (min < 10)
				{
					min = "0" + min
				}
				if (sec < 10)
				{
					sec = "0" + sec
				}
				if(msec < 10)
				{
					msec = "00" +msec
				}
				else if(msec < 100)
				{
					msec = "0" +msec
				}
				document.getElementById("chronotime").value = hr + ":" + min + ":" + sec + ":" + msec
				timerID = setTimeout("chrono()", 10)
			}
			
			function chronoStart()
			{
				document.chronoForm.startstop.value = "stop!"
				document.chronoForm.startstop.onclick = chronoStop
				document.chronoForm.reset.onclick = chronoReset
				start = new Date()
				chrono()
			}
			
			function chronoContinue()
			{
				document.chronoForm.startstop.value = "stop!"
				document.chronoForm.startstop.onclick = chronoStop
				document.chronoForm.reset.onclick = chronoReset
				start = new Date()-diff
				start = new Date(start)
				chrono()
			}
			
			function chronoReset()
			{
				document.getElementById("chronotime").value = "0:00:00:000"
				start = new Date()
			}
			
			function chronoStopReset()
			{
				document.getElementById("chronotime").value = "0:00:00:000"
				document.chronoForm.startstop.onclick = chronoStart
			}
			
			function chronoStop()
			{
				document.chronoForm.startstop.value = "start!"
				document.chronoForm.startstop.onclick = chronoContinue
				document.chronoForm.reset.onclick = chronoStopReset
				clearTimeout(timerID)
			}
		</script>
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
		
		<form name="chronoForm">
 			<input type="text" name="chronotime" id="chronotime" value="0:00:00:000"/>
    		<div id="startstop"><input type="button" name="startstop" value="start!" onClick="chronoStart()" style="display:none" /></div>
    		<div id="reset"><input type="button" name="reset" value="reset!" onClick="chronoReset()" style="display:none" /></div>
		</form>						
	</body>
</html>