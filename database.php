<?php

$ServeurMySQL = 'localhost:3306';
$UserMySQL = 'ludomess';
$UserPWD = 'ludomess';

class DBMySql {
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
		
		// on se connect à localhost au port 3307
		$link = mysql_connect('127.0.0.1:3307', 'mysql_user', 'mysql_password');
		if (!$link) {
			die('Connexion impossible : ' . mysql_error());
		}
		echo 'Connecté correctement';
		mysql_close($link);
	}
}


?>