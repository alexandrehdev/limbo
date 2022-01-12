<?php 
	session_start();
	session_destroy();

	header("Location: /src/View/screens/registerLogin/index.php");
 ?>