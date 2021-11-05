<?php 
	require "Class/LoadApi.php";
	$apidata = new LoadApi();
 ?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/components/icon.min.css">
	<link
      rel="stylesheet"
      href="https://unpkg.com/swiper/swiper-bundle.min.css"
    />
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
					<a href="../../index.php">Home</a>
					<div class="line"></div>
				</li>
				<li class="item-nav">
					<a href="../../pages/conteudo/index.php">Navegar</a>
					<div class="line"></div>
				</li>
				<li class="item-nav">
					<a href="index.php">Jogos Gratis</a>
					<div class="line"></div>
				</li>
				<li class="item-nav">
					<a href="#">Info</a>
					<div class="line"></div>
				</li>
				<li class="item-nav">
					<i class="user icon"></i>
					<div class="line"></div>
				</li>
			</ul>
		</nav>
	</header>
	<main>
			<div class="swiper mySwiper">
				<div class="swiper-wrapper">
						<div class="swiper-slide">
							<img src="<?php $apidata->getApiImage(0); ?>">
						</div>

						<div class="swiper-slide">
							<img src="<?php $apidata->getApiImage(1); ?>">
						</div>

						<div class="swiper-slide">
							<img src="<?php $apidata->getApiImage(2); ?>">
						</div>

						<div class="swiper-slide">
							<img src="<?php $apidata->getApiImage(3); ?>" alt="">
						</div>

						<div class="swiper-slide">
							<img src="<?php $apidata->getApiImage(4); ?>">
						</div>

						<div class="swiper-slide">
							<img src="<?php $apidata->getApiImage(5); ?>">
						</div>

						<div class="swiper-slide">
							<img src="<?php $apidata->getApiImage(6); ?>">
						</div>
						
					</div>
				<div class="swiper-pagination"></div>
			</div>
			<div class="swiper leftSwiper">
					<div class="swiper-wrapper">
						<div class="swiper-slide">
							<img src="<?php $apidata->getApiImage(7); ?>">
						</div>

						<div class="swiper-slide">
							<img src="<?php $apidata->getApiImage(8); ?>">
						</div>

						<div class="swiper-slide">
							<img src="<?php $apidata->getApiImage(9); ?>">
						</div>

						<div class="swiper-slide">
							<img src="<?php $apidata->getApiImage(10); ?>">
						</div>

						<div class="swiper-slide">
							<img src="<?php $apidata->getApiImage(11); ?>">
						</div>

						<div class="swiper-slide">
							<img src="<?php $apidata->getApiImage(12); ?>">
						</div>
						
					</div>
					<div class="swiper-pagination"></div>
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
			<script type="text/javascript" src="../../js/header.js"></script>
			<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

			<!-- Initialize Swiper -->
			<script>
			var swiper = new Swiper(".mySwiper", {
				direction: "vertical",
				slidesPerView: 4,
				pagination: {
				el: ".swiper-pagination",
				clickable: true,
				},
			});
			var swiper = new Swiper(".leftSwiper", {
				direction: "vertical",
				slidesPerView: 4,
				pagination: {
				el: ".swiper-pagination",
				clickable: true,
				},
			});
			</script>
		</body>
		</html>