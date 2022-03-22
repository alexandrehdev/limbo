<?php
namespace MyApp\Controller;
use MyApp\Model\User as UserModel;
use MyApp\View\Route;
use MyApp\Controller\Picture;

class User extends GetDataRegister
{
	public $picture;

	function __construct()
	{
		parent::__construct();
		$this->picture = (new Picture())->getProfilePicture();
	}

	public function validateData(){
		if (!filter_var(self::getEmail(), FILTER_VALIDATE_EMAIL)) {
			echo "Email inválido";
		}elseif(self::getPassword() != self::getCPassword()){
			echo "As senhas não se conferem";
		}else{
			(new UserModel())->registerUser();
		}
	}

	public function showUser(){
		return (new UserModel())->selectUser();
	}

	public function validateLogin(){
		$row = $this->showUser();
		if (self::getMailLogin() == $row['email'] && self::getPasswordLogin() == $row['password']) {
			Route::redirectPage("conteudo");
		}else{
			echo "Conta não existe ou dados incorretos";
		}
	}

	public function userProfile(){
		$usermodel = new UserModel();
		$usermodel->profileMovePicture($this->picture);
		$usermodel->updateImage($this->picture, $usermodel->currentEmailSession());
		$profile = $usermodel->profileCapture($usermodel->currentEmailSession());
		return $profile['profileimg'];
	}

}

?>
