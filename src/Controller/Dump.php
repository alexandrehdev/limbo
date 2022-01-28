<?php 
namespace MyApp\Controller;

class Dump
{
	private $insertQuery;
	
	function __construct(){
		$this->setInsertQuery(
			"INSERT INTO limbo.userdata 
				(username,email,password,cpassword) 
					VALUES 
				(:username,:email,:password,:cpassword)
			");
	}

	public function getInsertQuery(){
		return $this->insertQuery;
	}

	public function setInsertQuery($query){
		$this->insertQuery = $query;
	}

	public function getInsertPicture(){
		return $this->insertPicture;
	}

	public function setInsertPicture($picture){
		$this->insertPicture = $picture;
	}

	public function selectQuery($email,$pwd){
		$sql = "SELECT * FROM limbo.userdata WHERE email = '$email' AND password = '$pwd'";		
		return $sql;
	}

	public function selectImage($email){
		$sql = "SELECT profileimg FROM limbo.userdata WHERE email = '$email'";
		return $sql;
	}

	public function updateProfilePicture($file,$email){
		$sql = "UPDATE limbo.userdata SET profileimg = '$file' WHERE email = '$email' ";
		return $sql;
	}

	public function deleteQuery($email){
		$sql = "DELETE FROM limbo.userdata WHERE email = '$email'";
		return $sql;
	}

	
}

?>