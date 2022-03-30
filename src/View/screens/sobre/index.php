<?php
session_start();
?>

<!DOCTYPE html>
<html lang="pt">

<head>
	<meta charset="utf-8">
	<title>Limbo</title>
	<link rel="icon" type="image/png" href="../../favicon.png">
	<link rel="stylesheet" type="text/css" href="../../css/preloader.css">
	<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="../../css/reset.css">
	<link rel="stylesheet" type="text/css" href="../../css/buttons.css">
	<link rel="stylesheet" type="text/css" href="../../css/style.css">
	<link rel="stylesheet" type="text/css" href="../../css/colors.css">
	<link rel="stylesheet" type="text/css" href="../../css/componants.css">
	<link rel="stylesheet" type="text/css" href="../../css/footer.css">
	<link rel="stylesheet" type="text/css" href="../../css/info.css">
	<link rel="stylesheet" type="text/css" href="../../css/sobreCard.css">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/components/icon.min.css">
	<link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
</head>

<body>
	<div id="background-color-pre-loader">
		<header class="main-header">
			<!-- <h1 class="title-name">
			<img src="https://img.icons8.com/office/344/superman.png" height="65" style="margin-top: 15px; height: 60px;">
		</h1> -->

		<nav class="navigation">
			<ul class="list-nav">
				<li class="item-nav">
					<a href="index.php">Navegar</a>
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
			<div class="container">
				<div id="area-logo">
					<!-- <strong id="logo">
					Limbo
				</strong> -->
					<span id="data">2021</span>
				</div>
				<ul id="list-devs">
					<section class="section" role="section">
						<article class="article" role="article">
							<img class="image-developer" src="../../img/dev-example.png" alt="developer image" />
							<div class="right">
								<strong class="name-dev">Name Developer</strong>
								<ul class="list-media-social">
									<li class="item-media-social">
										<img class="icon-dev" src="../../img/icon-facebook.svg" alt="icon facebook" />
									</li>
									<li class="item-media-social">
										<img class="icon-dev" src="../../img/icon-github.svg" alt="icon github" />
									</li>
									<li class="item-media-social">
										<img class="icon-dev" src="../../img/icon-instagram.svg" alt="icon instagram" />
									</li>
									<li class="item-media-social">
										<img class="icon-dev" src="../../img/icon-linkedin.svg" alt="icon linkedin" />
									</li>
								</ul>
							</div>
						</article>
					</section>
					<section class="section" role="section">
						<article class="article" role="article">
							<img class="image-developer" src="../../img/dev-example.png" alt="developer image" />
							<div class="right">
								<strong class="name-dev">Name Developer</strong>
								<ul class="list-media-social">
									<li class="item-media-social">
										<img class="icon-dev" src="../../img/icon-facebook.svg" alt="icon facebook" />
									</li>
									<li class="item-media-social">
										<img class="icon-dev" src="../../img/icon-github.svg" alt="icon github" />
									</li>
									<li class="item-media-social">
										<img class="icon-dev" src="../../img/icon-instagram.svg" alt="icon instagram" />
									</li>
									<li class="item-media-social">
										<img class="icon-dev" src="../../img/icon-linkedin.svg" alt="icon linkedin" />
									</li>
								</ul>
							</div>
						</article>
					</section>
					<section class="section" role="section">
						<article class="article" role="article">
							<img class="image-developer" src="../../img/dev-example.png" alt="developer image" />
							<div class="right">
								<strong class="name-dev">Name Developer</strong>
								<ul class="list-media-social">
									<li class="item-media-social">
										<img class="icon-dev" src="../../img/icon-facebook.svg" alt="icon facebook" />
									</li>
									<li class="item-media-social">
										<img class="icon-dev" src="../../img/icon-github.svg" alt="icon github" />
									</li>
									<li class="item-media-social">
										<img class="icon-dev" src="../../img/icon-instagram.svg" alt="icon instagram" />
									</li>
									<li class="item-media-social">
										<img class="icon-dev" src="../../img/icon-linkedin.svg" alt="icon linkedin" />
									</li>
								</ul>
							</div>
						</article>
					</section>
				</ul>
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
