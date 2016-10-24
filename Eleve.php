<!DOCTYPE html>

<html>
	<head>
		<meta charset="ISO-8859-1">
		<link rel="stylesheet" href="style.css" />
		<title>QCM</title>
		<script type="text/Javascript">
������������var secondes = 0;
������������var timer;
������������var pause = false;
������������var text = "";
�������������
������������function IndiquerMinutes(min)
������������{
����������������secondes = min * 60;
������������}
������������function Chrono()
������������{
����������������if (secondes > 0)
����������������{
��������������������var minutes = Math.floor(secondes/60);
��������������������var heures = Math.floor(minutes/60);
��������������������secondes -= minutes * 60;
��������������������if (heures > 0)
��������������������{
������������������������minutes -= heures * 60;
������������������������if (minutes > 0)
������������������������{
����������������������������text = "Il reste " + heures + ' h ' + minutes + ' min ' + secondes + ' sec';
������������������������}
������������������������else
������������������������{��
����������������������������text = "Il reste " + heures + ' h ' + secondes + ' sec';
������������������������}
������������������������minutes = minutes + (heures * 60);
������������������������secondes = secondes + (minutes * 60) - 1;
�������������������������
��������������������}
��������������������else if (minutes > 0)
��������������������{
������������������������text = "Il reste " + minutes + ' min ' + secondes + ' sec';
������������������������secondes = secondes + (minutes * 60) - 1;
��������������������}
��������������������else
��������������������{
������������������������text = "Il reste " + secondes + ' sec';
������������������������secondes = secondes + (minutes * 60) - 1;
��������������������}
����������������}
����������������else
����������������{
��������������������clearInterval(timer);
��������������������text = "Le temps est �coul�";
����������������}
����������������document.getElementById('chrono').innerHTML = text;
������������}
������������function DemarrerChrono()
������������{
����������������timer = setInterval('Chrono()', 1000);
����������������document.getElementById('btn_dem').style.display = 'none';
����������������document.getElementById('btn_stop').style.display = 'inline';
����������������document.getElementById('btn_pause').style.display = 'inline';
�����������������
������������}
������������function ArreterChrono()
������������{
����������������clearInterval(timer);
����������������document.getElementById('btn_dem').style.display = 'inline';
����������������document.getElementById('btn_stop').style.display = 'none';
����������������document.getElementById('btn_pause').style.display = 'none';
������������}
������������function PauseChrono()
������������{
����������������if (!pause)
����������������{
��������������������pause = true;
��������������������clearInterval(timer);
��������������������text = '[EN PAUSE] ' + text;
��������������������document.getElementById('chrono').innerHTML = text;
��������������������document.getElementById('btn_stop').style.display = 'none';
��������������������document.getElementById('btn_pause').value = 'Reprendre';
����������������}
����������������else
����������������{
��������������������pause = false;
��������������������DemarrerChrono();
��������������������document.getElementById('btn_pause').value = 'Pause';
����������������}
������������}
�������������
��������</script>
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
		
		<form name="f_chrono">
            <label for="saisie">Entrez le temps voulu en minutes : </label>
            <input type="text" name="saisie" style="text-align: right;" /><br />
            <input type="button" name="btn_dem" id="btn_dem" value="D�marrer" onclick="IndiquerMinutes(f_chrono.saisie.value); DemarrerChrono();" />
            <input type="button" name="btn_stop" id="btn_stop" value="Arreter !" onclick="ArreterChrono();" style="display: none;" />
            <input type="button" name="btn_pause" id="btn_pause" value="Pause" onclick="PauseChrono();" style="display: none;" />
        </form>
        <p id="chrono"></p>						
	</body>
</html>