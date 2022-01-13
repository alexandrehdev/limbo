<?php 
namespace MyApp\Controller;

class GetDataRegister extends GetDataLogin
{
	private $username;
	private $email;
	private $password;
	private $cpassword;

	function __construct()
	{
		parent::__construct();
		
		$this->setUsername($_POST['username']);
		$this->setEmail($_POST['email']);
		$this->setPassword($_POST['pwd']);
		$this->setCPassword($_POST['cpwd']);
	}

	public function getUsername(){
		return $this->username;
	}

	public function setUsername($user){
		$this->username = $user;
	}

	public function getEmail(){
		return $this->email;
	}

	public function setEmail($email){
		$this->email = $email;
	}

	public function getPassword(){
		return $this->password;
	}

	public function setPassword($pwd){
		$this->password = $pwd;
	}

	public function getCPassword(){
		return $this->cpassword;
	}

	public function setCPassword($cpwd){
		$this->cpassword = $cpwd;
	}

}

?>