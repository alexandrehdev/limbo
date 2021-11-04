<?php 
	
	session_start();


	$_SESSION['insert_register'] = "INSERT INTO limbo.users(name,email,password) VALUES (:name,:email,:password)";

 ?>