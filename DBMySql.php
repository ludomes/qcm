<?php



class DBMySql {

	
	public static  function connectDatabase  () {
		$ServeurMySQL = 'localhost:3307';
		$UserMySQL = 'ludomess';
		$UserPWD = 'ludomess';
		// on se connecte à example.com et au port 3307
		print ("\nConnexion au serveur sql\n");
		print ("User : ".$UserMySQL);
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
