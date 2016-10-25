<?php



class DBMySql {
	private $ServeurMySQL;
	private $UserMySQL;
	private $UserPWD;
	
    function __construct() {
    	$ServeurMySQL= 'localhost';
    	$UserMySQL = 'ludomess';
    	$UserPWD = 'ludomess';
    }
	
	public function connectDatabase  () {
		// on se connecte à example.com et au port 3307
		echo 'Connexion au serveur sql <br>';
		echo 'User : ' . $UserMySQL . '<br>';
		$link = mysql_connect($ServeurMySQL, $UserMySQL, $UserPWD);
		if (!$link) {
			die('Connexion impossible : ' . mysql_error());
		}
		echo 'Connecté correctement';
	}
	
	public function disconnectDatabase () {
		mysql_close($link);
	}
}


?>
