<?php 
	

	class UserController
	{
		public static $username;
		public static $mail;
		private static $password;
		private static $cpassword;

		function __construct()
		{
			self::$username = $_POST['username'];
			self::$mail = $_POST['mail'];
			self::setPassword($_POST['pwd']);
			self::setCPassword($_POST['cpwd']);
		}

		public static function getPassword(){
			return self::$password;
		}

		public static function setPassword($pass){
			self::$password = $pass;
		}

		public static function getCPassword(){
			return self::$cpassword;
		}

		public static function setCPassword($cpass){
			self::$cpassword = $cpass;
		}
	}
	
 ?>