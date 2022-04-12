<?php
session_start();
?>

<!DOCTYPE html>
<html lang="pt">

<head>
	<meta charset="utf-8">
	<title>Limbo</title>
	<link rel="icon" type="image/png" href="../../favicon.png">
	<link rel="stylesheet" type="text/css" href="https://unpkg.com/aos@2.3.1/dist/aos.css">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/components/icon.min.css">
	<link rel="stylesheet" type="text/css" href="https://unpkg.com/aos@next/dist/aos.css"/>
	<link rel="stylesheet" type="text/css" href="../../css/globals.css">
	<link rel="stylesheet" type="text/css" href="../../css/info.css">
</head>

<body>
	<div id="background-color-pre-loader">
		<header class="main-header">
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
						<img src="../../img/userprofile/selectedImages/<?=$_SESSION['profile_usr'] ?>">
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

		<main id="main" role="main">

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
								Fique por dentro de tudo que acontece no mundo geek.
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

	<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
	<script type="text/javascript" src="../../js/aosConfig.js"></script>
	<script type="text/javascript" src="../../js/pages.js"></script>
	<script type="text/javascript" src="../../js/scroll.js"></script>
	<script type="text/javascript" src="../../js/header.js"></script>
	<script type="text/javascript" src="../../js/sobreCard.js"></script>
	<script type="text/javascript" src="../../js/sobreSectionRedi.js"></script>
</body>

</html>
