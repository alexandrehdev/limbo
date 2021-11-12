<?php 
	session_start();
	session_destroy();

	header("Location: /pages/registerLogin/index.php");
 ?>