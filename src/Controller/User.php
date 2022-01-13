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

	public function validateLogin(){
		$row = (new UserModel())->showUser();
		var_dump($row);
		die();
		if ($this->getMailLogin() == $row['email'] && $this->getPasswordLogin() == $row['password']) {
			Route::redirect("conteudo");
		}else{
			echo "Conta não existe ou dados incorretos";
		}
	}

}

?>