<?php 
namespace MyApp\Controller;
use MyApp\Model\User as UserModel;
use MyApp\View\Route;
use MyApp\Controller\Picture;

session_start();

class User extends GetDataRegister
{
	public $picture;

	function __construct()
	{
		parent::__construct();
		$this->picture = (new Picture())->getProfilePicture();

		$_SESSION['login_mail'] = $this->getMailLogin();
	}


	public function validateData(){
		if (!filter_var($this->getEmail(), FILTER_VALIDATE_EMAIL)) {
			echo "Email inválido";
		}elseif($this->getPassword() != $this->getCPassword()){
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
		if ($this->getMailLogin() == $row['email'] && $this->getPasswordLogin() == $row['password']) {
			Route::redirectPage("conteudo");
		}else{
			echo "Conta não existe ou dados incorretos";
		}
	}

	public function userProfile(){
		var_dump((new UserModel())->profileSetImg($this->picture, $_SESSION['login_mail']));
	}

}

?>