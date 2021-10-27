<?php 
	require "Class/LoadApi.php";
	$apidata = new LoadApi();
 ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
	<link rel="stylesheet" type="text/css" href="../../css/footer.css"/>
	<link rel="stylesheet" type="text/css" href="../../css/reset.css">
	<link rel="stylesheet" type="text/css" href="../../css/buttons.css">
	<link rel="stylesheet" type="text/css" href="../../css/style.css">
	<link rel="stylesheet" type="text/css" href="../../css/variables.css">
	<link rel="stylesheet" href="../../css/componants.css">
</head>
<body>
	<header class="main-header">
		<h1 class="title-name">Limbo</h1>
		<div class="navegation">
			<a href="../../index.php">Home</a>	
			<a href="../conteudo/index.php">Navegar</a>		
			<a href="index.php">Jogos Gratis</a>
			<a href="#">Info</a>
		</div>
	</header>
	<main>
		<div>
			<div class="freegames-table">	
				<div class="image">
					<img src=" <?php $apidata->getApiImage() ?> ">
				</div>
				<div class="title">
					<p> <?php $apidata->getApiTitle(); ?> </p>
				</div>
				<div class="description">
						<?php $apidata->getApishortDescription(); ?>
				</div>
			</div>

			<div class="freegames-table">	
				<div class="image">
					<img src=" <?php $apidata->getApiImage() ?> ">
				</div>
				<div class="title">
					<p> <?php $apidata->getApiTitle(); ?> </p>
				</div>
				<div class="description">
						<?php $apidata->getApishortDescription(); ?>
				</div>
			</div>
			<div class="freegames-table">	
				<div class="image">
					<img src=" <?php $apidata->getApiImage() ?> ">
				</div>
				<div class="title">
					<p> <?php $apidata->getApiTitle(); ?> </p>
				</div>
				<div class="description">
						<?php $apidata->getApishortDescription(); ?>
				</div>
			</div>
				
				<div>
					<div class="games-recommend">
						<div>
							<h2>Recomendados</h2>
						</div>
						<div>Card 1</div>
						<div>Card 1</div>
						<div>Card 1</div>
						<div>Card 1</div>
						<div>Card 1</div>
						<div>Card 1</div>
						<div>Card 1</div>
					</div>
				</div>
			</main>
			<footer class="m-footer" role="footer">
				<div class="container">
					<div id="area-logo">
						<strong id="logo">
							Limbo
						</strong>
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
			<script type="text/javascript" src="js/script.js"></script>
		</body>
		</html>