<?php
namespace MyApp\Model;
use MyApp\Controller\User as UserController;
use MyApp\Controller\Dump;
use MyApp\Controller\Connection;
use PDO;
session_start();
class User extends UserController
{
	public $pdo;
	public $dump;

	function __construct(){
		parent::__construct();

		$this->dump = new Dump();
		$this->pdo = (new Connection())->getCon();
	}

	public function registerUser(){
		$user = $this->storedUser();

		$stmt = $this->pdo->prepare($this->dump->getInsertQuery());
		$stmt->bindValue(':username',$user["register"]["user"]);
		$stmt->bindValue(':email',$user["register"]["email"]);
		$stmt->bindValue(':password',$user["register"]["password"]);
		$stmt->bindValue(':cpassword',$user["register"]["cpassword"]);
		$stmt->execute();

	}

	public function selectUser(){
		$user = $this->storedUser();
		$sql =  $this->dump->selectQuery($user["login"]["email"],$user["login"]["password"]);
		$stmt = $this->pdo->prepare($sql);
		$stmt->execute();
		$row = $stmt->fetch(PDO::FETCH_ASSOC);
		return $row;
	}

	// public function loadProfileUser($mail){
	// 	$sql = (new Dump())->selectImage($mail);
	// 	$stmt = $this->pdo->prepare($sql);
	// 	$stmt->execute();
	// 	$row = $stmt->fetch(PDO::FETCH_ASSOC);
	// 	return $row['profileimg'];
	// }

	public function profileCapture($email){
		$sql = (new Dump())->selectImage($email);
		$stmt = $this->pdo->prepare($sql);
		$stmt->execute();
		$row = $stmt->fetch(PDO::FETCH_ASSOC);
		return $row["profileimg"];
	}

	public function profileMovePicture($file){
		$target = "../../img/userprofile/{$file['name']}";
		move_uploaded_file($file['tmp_name'], $target);
	}

	public function updateImage($file,$email){
		$sql  =  $this->dump->updateProfilePicture($file['name'],$email);
		$stmt = $this->pdo->prepare($sql);
		$stmt->execute();
	}


}
?>
