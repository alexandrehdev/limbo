<?php 
namespace MyApp\Controller;

class GetDataLogin
{
	private $email;

	private $password;

	function __construct()
	{
		$this->setMailLogin($_POST['log-mail']);
		$this->setPasswordLogin($_POST['log-pass']);
	}

	public function getMailLogin(){
		return $this->email;
	}

	public function setMailLogin($mail){
		$this->email = $mail;
	}

	public function getPasswordLogin(){
		return $this->password;
	}

	public function setPasswordLogin($pwd){
		$this->password = $pwd;
	}
}
?>