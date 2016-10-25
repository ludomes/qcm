<?php



class DBMySql {

	
	public static  function connectDatabase  () {
		$ServeurMySQL = 'localhost:3307';
		$UserMySQL = 'ludomess';
		$UserPWD = 'ludomess';
		// on se connecte à example.com et au port 3307
		echo 'Connexion au serveur sql <br>\n';
		echo 'User : ' . $UserMySQL . '<br>\n';
		$link = mysql_connect($ServeurMySQL, $UserMySQL, $UserPWD);
		if (!$link) {
			die('Connexion impossible : ' . mysql_error());
		}
		echo 'Connecté correctement';
		mysql_close($link);
	}
}


?>
