<?php
namespace MyApp\Controller;

class GetDataRegister extends GetDataLogin
{
	private static $username;
	private static $email;
	private static $password;
	private static $cpassword;

	function __construct()
	{
		parent::__construct();

		self::setUsername($_REQUEST['username']);
		self::setEmail($_REQUEST['email']);
		self::setPassword($_REQUEST['pwd']);
		self::setCPassword($_REQUEST['cpwd']);
	}

	public static function getUsername(){
		return self::$username;
	}

	public function setUsername($user){
		self::$username = $user;
	}

	public function getEmail(){
		return self::$email;
	}

	public function setEmail($email){
		self::$email = $email;
	}

	public function getPassword(){
		return self::$password;
	}

	public function setPassword($pwd){
		self::$password = $pwd;
	}

	public function getCPassword(){
		return self::$cpassword;
	}

	public function setCPassword($cpwd){
		self::$cpassword = $cpwd;
	}

}

?>
