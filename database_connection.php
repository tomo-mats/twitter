<?php

class Connection_database
{
	protected $mysqli = null;
	
	function __construct($dsn='https://twitter-tomoya-matsumoto-1.c9.io/',$name='twitter',$user='root',$pass='',$dbport=3306)
	{
		$servername = getenv('IP');
	    $username = getenv('C9_USER');
		$password = "";
    	$database = "twitter";
    	$dbport = 3306;

    	// Create connection
    	$this->mysqli = new mysqli($servername, $username, $password, $database, $dbport);
    	
		if ($this->mysqli->connect_error) {
			echo $this->mysqli->connect_error;
			exit();
		} else {
			$this->mysqli->set_charset("utf8");
		}
	}

	public function getConnection(){
		return $this->mysqli;
	}

}
