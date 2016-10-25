<?php



class DBMySql {
	private $_ServeurMySQL = 'localhost';
	private $_UserMySQL = 'ludomess';
	private $_UserPWD = 'ludomess';
	public $_link;
	
    function __construct() {
    }
	
	public function connectDatabase  () {
		// on se connecte à example.com et au port 3307
		echo 'Connexion au serveur sql <br>';
		echo 'User : ' . $this->_UserMySQL . '<br>';
		$this->_link = mysql_connect($this->_ServeurMySQL, $this->_UserMySQL, $this->_UserPWD);
		if (!$this->_link) {
			die('Connexion impossible : ' . mysql_error());
		}
		echo 'Connecté correctement';
	}
	
	public function disconnectDatabase () {
		mysql_close($this->_link);
	}
}


?>
