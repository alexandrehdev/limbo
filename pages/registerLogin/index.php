<?php 
	require_once("Class/Controller/UserDataController.php");
	require_once("Class/Controller/UserController.php");

	if (isset($_POST['btn-register'])) {
		(new UserController());
		(new UserDataController())->registerUser();
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
</head>
<body>
	<header class="main-header">
		<h1 class="title-name">Limbo</h1>
	</header>

	<main>
		<div>
			<div>
				<form action="<?php $_SERVER['PHP_SELF']?>" method="POST">
					<div>
						<input type="text" placeholder="Nome de Usuario" name="username">
					</div>
					<div>
						<input type="text" placeholder="Email" name="mail">
					</div>
					<div>
						<input type="password" placeholder="Senha" name="pwd">
					</div>
					<div>
						<input type="password" placeholder="Confirme sua senha" name="cpwd">
					</div>
					<button name="btn-register">Cadastrar</button>
				</form>
			</div>

			<div>
				<form>
					<div>
						<input type="" name="">
					</div>
					<div>
						<input type="" name="">
					</div>
				</form>
			</div>
		</div>
	</main>

</body>
</html>