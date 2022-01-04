<?php 
	// Classe responsável para armazenar todas a views do projeto

	class View
	{
		//apresentação
		public $intro;


		//Cadastro e Login
		public $registerLogin; 


		//Principal
		public $home;


		//Jogos Gratis
		public $freegames;


		//Sobre e Criadores
		public $about;

		function __construct()
		{
			$this->intro = file_get_contents(__DIR__ . "/screens/intro/index.php");
		}

		public function showIntro()
		{
			return $this->intro;
		}
	}
 ?>