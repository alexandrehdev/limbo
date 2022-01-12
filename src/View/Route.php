<?php 
	namespace MyApp\View;

	class Route
	{
		// Metodo responsavel por redirecionar
		 
		public static function redirect($folder){
			header("Location: src/View/screens/{$folder}/index.php");
		}
	}
 ?>