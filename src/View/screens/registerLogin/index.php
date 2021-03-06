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
	<title>Limbo - Cadastro e Login</title>
	<link rel="icon" type="image/png" href="../../../../favicon.png">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css">
	<link rel="stylesheet" type="text/css" href="../../css/globals.css">
	<link rel="stylesheet" type="text/css" href="../../css/registerLogin.css">
</head>

<body>
	<div id="background-color-pre-loader">
		<a id="logo-link" href="../intro/index.php">
			<img src="../../../../favicon.png">
		</a>

		<main class="main-register-user">
			<section id="register-account" class="section-register register">
				<h1 class="title">Cadastro</h1>
				<form class="form-register-login" action="<?php $_SERVER['PHP_SELF'] ?>" method="POST">
					<div class="area-input">
						<i class="fas fa-user margin-right fa-2x"></i>
						<input id="input-username-register" class="input-placeholder" type="text" placeholder="Usuário" name="username" autocomplete="off">
					</div>
					<div class="area-input">
						<i class="fas fa-envelope margin-right fa-2x"></i>
						<input id="input-email-register" class="input-placeholder" type="email" placeholder="Email" name="email" autocomplete="off">
					</div>
					<div class="area-input">
						<i class="fas fa-key margin-right fa-2x"></i>
						<input id="input-password-register" class="input-placeholder" type="password" placeholder="Senha" name="pwd" autocomplete="off">
					</div>
					<div class="area-input">
						<i class="fas fa-key margin-right fa-2x"></i>
						<input id="input-confirm-password-register" class="input-placeholder" type="password" placeholder="Confirmar senha" name="cpwd">
					</div>
					<span id="message-capslock-register" class="message-capslock color-danger">CAPSLOCK ATIVADO</span>
					<input type="submit" name="btn-register" title="Registrar" value="Cadastrar" />
				</form>
			</section>

			<section id="login-account" class="section-register login">
				<h1 class="title">Login</h1>
				<div class="msg-erro" id="msgerro">
				</div>
				<form class="form-register-login" method="POST" action="<?php $_SERVER['PHP_SELF'] ?>">

					<div class="area-input">
						<i class="fas fa-envelope margin-right fa-2x"></i>
						<input 
							id="input-email-login"
							class="input-placeholder"
							required type="email" 
							placeholder="Email" 
							name="log-mail" 
							autocomplete="off"
						>

					</div>
					<div class="area-input">
						<i class="fas fa-key margin-right fa-2x"></i>
						<input id="input-password-login" required class="input-placeholder" type="password" placeholder="Senha" name="log-pass" autocomplete="off">
					</div>
					<span id="message-capslock-login" class="message-capslock color-danger">CAPSLOCK ATIVADO</span>
					<input name="btn-login" type="submit" title="Logar" value="Logar" />
				</form>
			</section>
		</main>

	</div>
	<div id="background-black-modal">
		<div class="modal-register-login">
			<span class="modal-register-login-text">Esse email já existe</span>
			<button class="modal-register-login-button">Okey</button>
		</div>
	</div>

	<input type="hidden" id="mail-response" name="" value="<?= $_SESSION['email_response'] ?>" />
	<!-- se estiver um email duplicado ele vai retornar duplicated_email -->
	<img id="pre-loader-element" src="../../img/pre-loader.svg" alt="pre-loader" />
	<script src="../../js/pages.js"></script>
	<script src="../../js/registerLogin.js"></script>
</body>

</html>