<?php 
require_once("Class/Controller/UserLoginController.php");
require_once("Connection/Connection.php");

session_start();

class UserLoginModel extends UserLoginController
{
	
	public $lMail;
	public $lPass;

		// connection variable
	public $conx;

	function __construct()
	{
		$this->lMail = parent::$logMail;
		$this->lPass = parent::getLogPass();

		$this->conx = (new Connection())->getCon();
	}


	public function showData(){
		$query = "SELECT * FROM limbo.users WHERE email = '$this->lMail' 
		AND password = '$this->lPass'";
		$stmt = $this->conx->prepare($query);
		$stmt->execute();
		$row = $stmt->fetch(PDO::FETCH_ASSOC);
		return $row;
	}

}

?>