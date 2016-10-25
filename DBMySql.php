<?php



class DBMySql {
	private $ServeurMySQL = 'localhost:3307';
	private $UserMySQL = 'ludomess';
	private $UserPWD = 'ludomess';
	
	public static  function connectDatabase  () {
		// on se connecte à example.com et au port 3307
		echo 'Connexion au serveur sql';
		$link = mysql_connect($ServeurMySQL, $UserMySQL, $UserPWD);
		if (!$link) {
			echo 'Connexion impossible';
			die('Connexion impossible : ' . mysql_error());
		}
		echo 'Connecté correctement';
		mysql_close($link);
	}
}


?>
