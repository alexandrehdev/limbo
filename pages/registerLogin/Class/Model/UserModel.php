<?php 
	require_once("queryBase/script.php");
	require_once("Connection/Connection.php");
	require_once("Class/Controller/UserController.php");


	class UserModel extends UserController
	{

		public $name;
		public $email;
		public $password;
		public $cpassword;

		// conection variable
		public $con;

		function __construct()
		{
			$this->name = parent::$username;
			$this->email = parent::$mail;
			$this->password = parent::getPassword();
			$this->cpassword = parent::getCPassword();

			// connection variable

			$this->con = (new Connection())->getCon();
		}

		public function verifyUser(){
			if ($this->password != $this->cpassword) {
				echo "Senhas não se conferem";
			}else{
				$this->insertDB();
				echo "Cadastro realizado com sucesso";
			}
		}

		public function insertDB(){
			$query = $_SESSION['query_register'];
			$stmt = $this->con->prepare($query);
			$stmt->bindValue(':name', $this->name);
			$stmt->bindValue(':email',$this->email);
			$stmt->bindValue(':password',$this->password);
			$stmt->execute();
		}
	}
 ?>