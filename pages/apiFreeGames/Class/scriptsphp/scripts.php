<?php 
	session_start();


	$_SESSION['api_link'] = file_get_contents("https://www.freetogame.com/api/games");

 ?>