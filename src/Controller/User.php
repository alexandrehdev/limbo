<?php 
namespace MyApp\Controller;
use MyApp\Model\User as UserModel;
use MyApp\View\Route;

class User extends GetData
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

}

?>