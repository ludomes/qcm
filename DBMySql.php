<?php



class DBMySql {
	private $_ServeurMySQL;
	private $_UserMySQL;
	private $_UserPWD;
	private $_link;
	
    function __construct() {
    	$this->_ServeurMySQL= 'localhost';
    	$this->_UserMySQL = 'ludomess';
    	$this->_UserPWD = 'ludomess';
    }
	
	public function connectDatabase  () {
		// on se connecte à example.com et au port 3307
		echo 'Connexion au serveur sql <br>';
		echo 'User : ' . $this->UserMySQL . '<br>';
		$this->link = mysql_connect($this->ServeurMySQL, $this->UserMySQL, $this->UserPWD);
		if (!$this->link) {
			die('Connexion impossible : ' . mysql_error());
		}
		echo 'Connecté correctement';
	}
	
	public function disconnectDatabase () {
		mysql_close($this->link);
	}
}


?>
