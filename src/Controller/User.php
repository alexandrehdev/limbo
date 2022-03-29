<?php
namespace MyApp\Controller;

ini_set("memory_limit",-1); //unlimited memory usage (only for test of performance)

use MyApp\Model\User as UserModel;
use MyApp\View\Route;
use MyApp\Controller\Picture;

class User extends GetDataRegister
{
	public $picture;
	public $usermodel;

	function __construct(){
		parent::__construct();
		$this->picture = (new Picture())->getProfilePicture();
	}

	public function storedUser(){
		$register = [
			"user" => self::getUsername(),
			"email" => self::getEmail(),
			"password" => self::getPassword(),
			"cpassword" => self::getCPassword()
		];
		$login = [
			"email" => self::getMailLogin(),
			"password" => self::getPasswordLogin()
		];
		return["register" => $register, "login" => $login];
	}

	public function validateAction(){
		$user = $this->storedUser();
		if (!empty($user["register"]["email"])):
			(new GetDataRegister());
			return "register";
		elseif(!empty($user["login"]["email"])):
				(new GetDataLogin());
			return "login";
		endif;
}

	public function validateData(){
		$action = $this->validateAction();
		switch ($action) {
			case "register":
				$this->validateRegister();
				break;
			case "login":
				$this->validateLogin();
				break;
		}
	}

	public function validateRegister(){
		$user = $this->storedUser();
		if(!filter_var($user["register"]["email"], FILTER_VALIDATE_EMAIL)):
			echo "email inválido";
		elseif($user["register"]["password"] != $user["register"]["cpassword"]):
			echo "as senhas não se conferem";
		else:
			(new UserModel())->registerUser();
		endif;
	}

	public function validateLogin(){
		$row = $this->showUser();
		$user = $this->storedUser();
		if($user["login"]["email"]==$row['email']&&$user["login"]["password"]==$row['password']):
			$_SESSION['current_email'] = $row['email']; //load a new session and store email content
			$_SESSION['profile_usr'] = $row['profileimg'];
			$_SESSION['username'] = $row['username'];
			Route::redirectPage("conteudo");
		else:
			echo "conta não existe ou dados incorretos";
		endif;
	}

	public function verifyAction(){
		if (isset($_REQUEST['btndelete'])):
			(new UserModel())->deleteAccount($_SESSION['current_email']);
			header("Location: ../registerLogin/index.php");
		elseif(isset($_REQUEST['profile-btn'])):
			$this->userProfile();
		endif;
	}

	public function userProfile(){
		$usermodel = new UserModel();
		$usermodel->profileMovePicture($this->picture);
		$usermodel->updateImage($this->picture, $_SESSION['current_email']);
		$_SESSION['profile_usr'] = $usermodel->profileCapture($_SESSION['current_email']);
	}

	public function showUser(){
		return (new UserModel())->selectUser();
	}

}


?>
