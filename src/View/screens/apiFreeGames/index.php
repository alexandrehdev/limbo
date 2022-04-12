<?php
require_once("../../../../vendor/autoload.php");

use MyApp\Controller\LoadApi;

$api = new LoadApi();
$response = $api->getResult();
session_start();
?>
<!DOCTYPE html>
<html lang="pt">

<head>
	<meta charset="utf-8">
	<title></title>
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/components/icon.min.css">
	<link rel="stylesheet" type="text/css" href="../../css/globals.css">
	<link rel="stylesheet" type="text/css" href="../../css/apiFreeGames.css">
</head>
<style>
</style>

<body>
	<div id="background-color-pre-loader">
		<header class="main-header">
			<!-- <h1 class="title-name">
			<img src="https://img.icons8.com/office/344/superman.png" height="65" style="margin-top: 15px; height: 60px;">
		</h1> -->
			<nav class="navigation">
				<ul class="list-nav">
					<li class="item-nav">
						<a href="../conteudo/index.php">Navegar</a>
						<div class="line"></div>
					</li>
					<li class="item-nav">
						<a href="../apiFreeGames/index.php">Jogos Gratis</a>
						<div class="line"></div>
					</li>
					<li class="item-nav">
						<a href="../sobre/index.php">Info</a>
						<div class="line"></div>
					</li>
				</ul>
			</nav>

			<div class="user-account-item" data-type-element="dropdown">
				<strong class="user-account-text" style="text-transform:uppercase;">
					<div class="small-profile">
						<img src="../../img/userprofile/selectedImages/<?= $_SESSION['profile_usr'] ?>">
					</div>
				</strong>
				<div class="line dropdown">
					<ul class="list-dropdown">
						<li class="item-list-dropdown">
							<span class="item-dropdown headProfile">
								Perfil
							</span>
							<div class="line"></div>
						</li>
						<li class="item-list-dropdown">
							<span class="item-dropdown logout">
								Sair
							</span>
							<div class="line"></div>
						</li>
					</ul>
				</div>
			</div>
		</header>

		<div class="background-header">
			<h1>Receba jogos gratis toda semana</h1>
		</div>
		<main>
			<div class="grid-of-free-games">
				<?php
					for ($i = 10; $i <= 30; $i++) :
						echo "
								<div class='card'>
									<div class='card-img-header'>
										<img src=" . $response[$i]['thumbnail'] . ">
									</div>
									<div class='box-text'>
										<span class='title-game'>
											" . $response[$i]['title'] . "
										</span>
										<span class='game-tag'>
										" . $response[$i]['platform'] . " " . "
										" . $response[$i]['genre'] . "
										</span>
									</div>
								</div>
							";
					endfor;
				?>
			</div>

			<section class="noticias">
				<div class="noticias-opacity"></div>
				<div class="container">
					<div class="noticias-text">
						<h2>
							Streamer termina The Witcher 3 usando apenas um botão do controle
						</h2>
						<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores cumque non dicta quisquam ratione similique omnis a voluptates. Veritatis fuga dicta ducimus minus consectetur accusamus illum modi placeat officia velit!</p>
					</div>
				</div>
			</section> -->
		</main>

		<footer class="m-footer" role="footer">
			<div class="footer-container">
				<div class="footer-row">
					<div class="footer-col">
						<h4>Sobre</h4>
						<ul>
							<li><a href="../apiFreeGames/index.php">Jogos Grátis</a></li>
							<li><a href="../sobre/index.php">Desenvolvedores</a></li>
						</ul>
					</div>
					<div class="footer-col">
						<h4>Limbo</h4>
						<p class="footer-desc">
							Recebe jogos grátis toda semana ;)
						</p>
					</div>
					<div class="footer-col">
						<h4>Desenvolvedores</h4>
						<div class="developers-links">
							<a href="../sobre/index.php">
								<img src="https://github.com/alexandrehdev.png" alt="Desenvolvedor do Limbo">
								<img src="https://github.com/AstronautoLunar.png" alt="Desenvolvedor do Limbo">
								<img src="https://github.com/GuiLeoni14.png" alt="Desenvolvedor do Limbo">
								<img src="https://github.com/eduardo-sdev.png" alt="Desenvolvedor do Limbo">
							</a>
						</div>
					</div>
				</div>
			</div>
			<div class="footer-bottom">
				<p>copyright &copy;2022 Limbo</p>
			</div>
		</footer>
	</div>

	<img id="pre-loader-element" src="../../img/pre-loader.svg" alt="pre-loader" />

	<script type="text/javascript" src="../../js/header.js"></script>
	<script type="text/javascript" src="../../js/pages.js"></script>
</body>

</html>