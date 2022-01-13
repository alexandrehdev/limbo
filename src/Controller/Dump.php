<?php 
namespace MyApp\Controller;

class Dump
{
	private $insertQuery;
	
	

	function __construct(){
		$this->setInsertQuery(
			"INSERT INTO limbo.userdata (username,email,password,cpassword) 
			VALUES (:username,:email,:password,:cpassword)
			");
	}

	public function getInsertQuery(){
		return $this->insertQuery;
	}

	public function setInsertQuery($query){
		$this->insertQuery = $query;
	}

	public function selectQuery($user,$pwd){
		$sql = "SELECT username,password FROM limbo.userdata WHERE username = '$user' AND password = '$pwd'";
		
		return $sql;
	}

	
}

?>