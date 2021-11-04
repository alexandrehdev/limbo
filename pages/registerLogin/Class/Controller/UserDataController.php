<?php 
require_once("../../config.php");
require_once("Class/Model/UserModel.php");

class UserDataController
{


	public function registerUser()
	{
		(new UserModel())->verifyUser();
		// Caso o usuário esteja dentro do padrão	
		// O cadastro será realizado no banco de dados
	}
}

?>