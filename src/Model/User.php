<?php 
namespace MyApp\Model;
use MyApp\Controller\User as UserController;
use MyApp\Controller\Dump;
use MyApp\Controller\Connection;

class User extends UserController
{	
	public $pdo;

	function __construct(){
		parent::__construct();
		$this->pdo = (new Connection())->getCon();
	}

	public function registerUser(){
		$stmt = $this->pdo->prepare((new Dump())->getInsertQuery());
		$stmt->bindValue(':username',$this->getUsername());
		$stmt->bindValue(':email',$this->getEmail());
		$stmt->bindValue(':password',$this->getPassword());
		$stmt->bindValue(':cpassword',$this->getCPassword());
		$stmt->execute();
	}

	public function showUser(){
		$stmt = $this->pdo->prepare((new Dump())->getSelectQuery());
		$stmt->execute();
		$row = $stmt->fetch(PDO::FETCH_ASSOC);
		return $row;
	}
}
?>