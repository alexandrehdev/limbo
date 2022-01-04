<?php 
	
	class UserLoginController
	{
		public static $logMail;
		private static $logPass;

		function __construct()
		{
			self::$logMail = $_POST['log-mail'];
			self::setLogPass($_POST['log-pass']);
		}

		public static function getLogPass(){
			return self::$logPass;
		}

		public static function setLogPass($pass){
			self::$logPass = $pass;
		}
	}

 ?>