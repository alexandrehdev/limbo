<?php 
namespace MyApp\Controller;
use MyApp\Model\User as UserModel;
use MyApp\View\Route;

class User extends GetDataRegister
{
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

}

?>