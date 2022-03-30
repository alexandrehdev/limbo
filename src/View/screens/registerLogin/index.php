<?php
require_once("../../../../vendor/autoload.php");

use MyApp\Controller\User;
use MyApp\Controller\GetDataRegister;
use MyApp\Controller\GetDataLogin;

session_start();

if ($_SERVER['REQUEST_METHOD'] == "POST") {
	(new User())->validateData();
}
?>
<!DOCTYPE html>
<html lang="pt">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<link rel="stylesheet" type="text/css" href="../../css/globals.css">
	<link rel="stylesheet" type="text/css" href="../../css/style.css">
	<link rel="stylesheet" href="../../css/registerLogin.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css">
</head>

<body>
	<!-- <header class="main-header"> -->
	<div id="background-color-pre-loader">
		<a id="logo-link" href="../intro/index.php">
			<img src="../../../../favicon.png">
		</a>
	<!-- </header> -->

	<main class="main-register-user">
		<section id="register-account" class="section-register register">
			<!-- <h1 class="title-register">Registrar</h1> -->
			<form class="form-register-login" action="<?php $_SERVER['PHP_SELF'] ?>" method="POST">
				<div class="area-inputs">
					<i class="fas fa-user margin-right fa-2x"></i>
					<input id="input-username-register" type="text" placeholder="Usuario" name="username" autocomplete="off">
				</div>
				<div class="area-inputs">
					<i class="fas fa-envelope margin-right fa-2x"></i>
					<input id="input-email-register" type="email" placeholder="Email" name="email" autocomplete="off">
				</div>
				<div class="area-inputs">
					<i class="fas fa-key margin-right fa-2x"></i>
					<input id="input-password-register" type="password" placeholder="Senha" name="pwd" autocomplete="off">
				</div>
				<div class="area-inputs">
					<i class="fas fa-key margin-right fa-2x"></i>
					<input id="input-confirm-password-register" type="password" placeholder="Confirme senha" name="cpwd">
				</div>
				<span id="message-capslock-warning" class="message-capslock color-warning">CAPSLOCK ATIVADO</span>
				<!-- <i class="fas fa-pencil-alt fa-2x"></i> -->
				<input type="submit" name="btn-register" title="Registrar" value="Cadastrar" />
			</form>
		</section>

		<section id="login-account" class="section-register login">
			<!-- <h1 class="title-register" id="login">Login</h1> -->
			<div class="msg-erro" id="msgerro">
				<!-- <span>Login ou senha incorretos</span> -->
			</div>
			<form class="form-register-login" method="POST" action="<?php $_SERVER['PHP_SELF'] ?>">

				<div class="area-inputs">
					<i class="fas fa-envelope margin-right fa-2x"></i>
					<input id="input-email-login" required type="email" placeholder="Email" name="log-mail" autocomplete="off">
				</div>
				<div class="area-inputs">
					<i class="fas fa-key margin-right fa-2x"></i>
					<input id="input-password-login" required type="password" placeholder="Senha" name="log-pass" autocomplete="off">
				</div>
				<span id="message-capslock-danger" class="message-capslock color-danger">CAPSLOCK ATIVADO</span>
				<input name="btn-login" type="submit" title="Logar" value="Logar" />
					<!-- <i class="fab fa-telegram-plane fa-2x"></i> -->
			</form>
		</section>
	</main>
	</div>
	<img id="pre-loader-element" src="../../img/pre-loader.svg" alt="pre-loader" />
	<script src="../../js/registerLogin.js"></script>
	<script src="../../js/pages.js"></script>
</body>

</html>
