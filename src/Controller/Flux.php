<?php 
	require_once("autoload.php");

	class Flux extends View
	{
		public function showIntro(){
			echo (new View())->showIntro();
		}
	}

 ?>