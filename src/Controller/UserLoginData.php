<?php 
require_once("Class/Model/UserLoginModel.php");
require_once("UserLoginController.php");

class UserLoginData extends UserLoginController
{
	public $loginMail;
	public $loginPassw;
	
	function __construct()
	{
		$this->loginMail = parent::$logMail;
		$this->loginPassw = parent::getLogPass();
	}

	public function loginUser()
	{
		$data = (new UserLoginModel())->showData();	

		if ($this->loginMail == $data['email'] && $this->loginPassw == $data['password'] ) {
			$_SESSION['login_user'] = $this->loginMail;
			header("Location: ../conteudo/index.php");	
		}else{
			echo "Dados não existem";
		}
	}
}

?>