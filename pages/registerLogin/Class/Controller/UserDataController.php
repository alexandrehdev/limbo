<?php 
require_once("Class/Model/UserModel.php");
require_once("UserController.php");


class UserDataController extends UserController
{
	public $name;
	public $email;
	public $pass;
	public $cpass;

	function __construct()
	{
		$this->name = parent::$username;
		$this->email = parent::$mail;
		$this->pass = parent::getPassword();
		$this->cpass = parent::getCPassword();
	}
	
	public function registerUser()
	{
		if (!empty($this->name) && !empty($this->email) && !empty($this->pass) && !empty($this->cpass)) {
			(new UserModel())->verifyUser();
		}
		
	}
}

?>