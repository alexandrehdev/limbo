<?php
require_once("../../../../vendor/autoload.php");

use MyApp\Controller\LoadApi;

$api = new LoadApi();
$response = $api->getResult();
session_start();
?>
<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<title></title>
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/components/icon.min.css">
	<!-- 
		<link
    		rel="stylesheet"
    		href="https://unpkg.com/swiper/swiper-bundle.min.css"
    	/> 
	-->
	<link rel="stylesheet" type="text/css" href="../../css/footer.css" />
	<link rel="stylesheet" type="text/css" href="../../css/reset.css">
	<link rel="stylesheet" type="text/css" href="../../css/buttons.css">
	<link rel="stylesheet" type="text/css" href="../../css/style.css">
	<link rel="stylesheet" type="text/css" href="../../css/variables.css">
	<link rel="stylesheet" href="../../css/componants.css">
</head>
<style>
</style>

<body>
	<header class="main-header">
		<h1 class="title-name">Limbo</h1>
		<nav class="navigation">
			<ul class="list-nav">
				<li class="item-nav">
					<a href="../conteudo/index.php">Navegar</a>
					<div class="line"></div>
				</li>
				<li class="item-nav">
					<a href="index.php">Jogos Gratis</a>
					<div class="line"></div>
				</li>
				<li class="item-nav">
					<a href="../sobre/index.php">Info</a>
					<div class="line"></div>
				</li>
				<li class="item-nav">
					<strong class="user-account-text" style="text-transform:uppercase;">
						<i class="user icon"></i>
						<?php
						echo strtoupper($_SESSION['user']['username']);
						?>
					</strong>
					<div class="line dropdown">
						<ul class="list-dropdown">
							<li class="item-list-dropdown">
								<span class="item-dropdown headProfile">
									Perfil
								</span>
								<div class="line"></div>
							</li>
							<li class="item-list-dropdown logout">
								<span class="item-dropdown">
									Sair
								</span>
								<div class="line"></div>
							</li>
						</ul>
					</div>
				</li>
			</ul>
		</nav>
	</header>
	<main>
		<div class="container">
		<div class="freegames-table">
			<?php for ($i = 0; $i <= 10; $i++) { ?>
				<div class="card-games">
					<img class="background-card-games" src="<?php echo $response[$i]['thumbnail']; ?>">
					<div class="area-text-card-games">
						<span class="title-card-games">
							<?php echo $response[$i]['title']; ?>
						</span>
						<span class="description-card-games">
							<?php echo $response[$i]['short_description']; ?>
						</span>
					</div>
				</div>
			<?php } ?>
		</div>
		
		<div class="freegames-table">
			<?php for ($i = 11; $i <= 21; $i++) { ?>
				<div class="card-games">
					<img class="background-card-games" src="<?php echo $response[$i]['thumbnail']; ?>">
					<div class="area-text-card-games">
						<span class="title-card-games">
							<?php echo $response[$i]['title']; ?>
						</span>
						<span class="description-card-games">
							<?php echo $response[$i]['short_description']; ?>
						</span>
					</div>
				</div>
			<?php } ?>
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
	<script type="text/javascript" src="../../js/apiFreeGames.js"></script>
	<script type="text/javascript" src="../../js/title-scroll.js"></script>
	<script type="text/javascript" src="../../js/header.js"></script>
	<script type="text/javascript" src="../../js/pages.js"></script>
	<script type="text/javascript">
		const scrollContainer = document.querySelectorAll(".freegames-table");
		console.log(scrollContainer);
		scrollContainer.forEach((item) => {
			item.addEventListener("wheel", (evt) => {
			evt.preventDefault();
			item.scrollLeft += evt.deltaY;
			});
		})
	</script>
</body>

</html>