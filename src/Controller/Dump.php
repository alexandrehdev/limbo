<?php 
namespace MyApp\Controller;

class Dump
{
	private $insertQuery;
	
	private $selectQuery;

	function __construct(){
		$this->setInsertQuery(
			"INSERT INTO limbo.userdata (username,email,password,cpassword) 
					VALUES (:username,:email,:password,:cpassword)
			");

		$this->setSelectQuery("SELECT * FROM limbo.userdata");
	}

	public function getInsertQuery(){
		return $this->insertQuery;
	}

	public function setInsertQuery($query){
		$this->insertQuery = $query;
	}

	public function getSelectQuery(){
		return $this->selectQuery;
	}

	public function setSelectQuery($query){
		$this->selectQuery = $query;
	}
	
}

?>