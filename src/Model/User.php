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

	function __construct(){
		parent::__construct();

		$this->pdo = (new Connection())->getCon();
	}

	public function registerUser(){
		$_SESSION['current_email'] = self::getEmail();

		$stmt = $this->pdo->prepare((new Dump())->getInsertQuery());
		$stmt->bindValue(':username',self::getUsername());
		$stmt->bindValue(':email',self::getEmail());
		$stmt->bindValue(':password',self::getPassword());
		$stmt->bindValue(':cpassword',self::getCPassword());
		$stmt->execute();

	}

	public function selectUser(){
		$sql = (new Dump())->selectQuery(self::getMailLogin(),self::getPasswordLogin());
		$stmt = $this->pdo->prepare($sql);
		$stmt->execute();
		$row = $stmt->fetch(PDO::FETCH_ASSOC);

		return $row;
	}

	public function profileCapture($email){
		$sql = (new Dump())->selectImage($email);
		$stmt = $this->pdo->prepare($sql);
		$stmt->execute();
		$row = $stmt->fetch(PDO::FETCH_ASSOC);
		return $row;
	}

	public function profileMovePicture($file){
		$target = "../../img/userprofile/{$file['name']}";
		move_uploaded_file($file['tmp_name'], $target);
	}

	public function updateImage($file,$email){
		$sql = (new Dump())->updateProfilePicture($file['name'],$email);
		$stmt = $this->pdo->prepare($sql);
		$stmt->execute();
	}

	public function currentEmailSession(){
		return $_SESSION['current_email'];
	}

}
?>
