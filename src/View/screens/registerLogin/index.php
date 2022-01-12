<?php 
require_once("../../../../vendor/autoload.php");

use MyApp\Controller\User;
use MyApp\Controller\GetData;

if (isset($_POST['btn-register'])) {
	(new GetData());
	(new User())->validateData();
}

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="../../css/reset.css">
	<link rel="stylesheet" type="text/css" href="../../css/buttons.css">
	<link rel="stylesheet" type="text/css" href="../../css/style.css">
	<link rel="stylesheet" type="text/css" href="../../css/variables.css">
	<link rel="stylesheet" href="../../css/componants.css">
	<link rel="stylesheet" href="../../css/footer.css">
	<link rel="stylesheet" href="../../css/register.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.css" />
</head>
<body>
	<header class="main-header register-header">
		<a href="../../index.php">
			<h1 class="title-name">Limbo</h1>
		</a>
	</header>

	<main class="main-register-user">
		<section id="register-account" class="section-register">
			<h1 class="title-register">Registrar</h1>
			<form class="form-register-login" action="<?php $_SERVER['PHP_SELF'] ?>" method="POST">
				<div class="area-inputs">
					<i class="fas fa-user margin-right fa-2x"></i>
					<input type="text" placeholder="Usuario"name="username" autocomplete="off">
				</div>
				<div class="area-inputs">
					<i class="fas fa-envelope margin-right fa-2x"></i>
					<input type="text" placeholder="Email" name="email">
				</div>
				<div class="area-inputs">
					<i class="fas fa-key margin-right fa-2x"></i>
					<input type="password" placeholder="Senha" name="pwd">
				</div>
				<div class="area-inputs">
					<i class="fas fa-key margin-right fa-2x"></i>
					<input type="password" placeholder="Confirme senha" name="cpwd">
				</div>
				<button name="btn-register"title="Registrar">
					<i class="fas fa-pencil-alt fa-2x"></i>
				</button>
			</form>
		</section>

		<section id="login-account" class="section-register">
			<h1 class="title-register" id="login">Login</h1>
			<div class="msg-erro" id="msgerro">
				<!-- <span>Login ou senha incorretos</span> -->
			</div>
			<form class="form-register-login" method="POST" action="<?php $local ?>">

				<div class="area-inputs">
					<i class="fas fa-envelope margin-right fa-2x"></i>
					<input type="email" placeholder="Email" name="log-mail">
				</div>

				<div class="area-inputs">
					<i class="fas fa-key margin-right fa-2x"></i>
					<input type="password" placeholder="Senha" name="log-pass">
				</div>

				<button name="btn-login" type="submit"title="Logar">
					<i class="fab fa-telegram-plane fa-2x"></i>
				</button>
			</form>
		</section>
	</main>

	<script src="https://code.jquery.com/jquery-3.4.0.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.js"></script>
	<script src="./js/errorMessage.js"></script>
</body>
</html>