<?php 
namespace MyApp\Model;
use MyApp\Controller\User as UserController;
use MyApp\Controller\Dump;
use MyApp\Controller\Connection;
use PDO;

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

	public function selectUser(){
		$sql = (new Dump())->selectQuery($this->getMailLogin(),$this->getPasswordLogin());
		$stmt = $this->pdo->prepare($sql);
		$stmt->execute();
		$row = $stmt->fetch(PDO::FETCH_ASSOC);

		return $row;
	}
	// mover
	// capturar a imagem
	// atualizar

	public function profileCapture($email){
		$sql = (new Dump())->selectImage($email);
		$stmt = $this->pdo->prepare($sql);
		$stmt->execute();
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

	public function profileSetImg($file,$email){
		$this->profileMovePicture($file);
		$this->profileCapture($email);
		$this->updateImage($file,$email);
	}
}
?>