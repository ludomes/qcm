<?php



class DBMySql {

	
    function __construct() {
        
    }
	
	public function connectDatabase  () {
		$ServeurMySQL = 'localhost';
		$UserMySQL = 'ludomess';
		$UserPWD = 'ludomess';
		// on se connecte à example.com et au port 3307
		echo 'Connexion au serveur sql <br>';
		echo 'User : ' . $UserMySQL . '<br>';
		$link = mysql_connect($ServeurMySQL, $UserMySQL, $UserPWD);
		if (!$link) {
			die('Connexion impossible : ' . mysql_error());
		}
		echo 'Connecté correctement';
		mysql_close($link);
	}
}


?>
