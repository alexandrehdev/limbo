<?php
namespace MyApp\Controller;

class GetDataLogin
{
	private static $email;
	private static $password;

	function __construct()
	{
		self::setMailLogin($_REQUEST['log-mail']);
		self::setPasswordLogin($_REQUEST['log-pass']);
	}

	public static function getMailLogin(){
		return self::$email;
	}

	public static function setMailLogin($mail){
		self::$email = $mail;
	}

	public static function getPasswordLogin(){
		return self::$password;
	}

	public static function setPasswordLogin($pwd){
		self::$password = $pwd;
	}
}
?>
