<?php
require_once("../../../../vendor/autoload.php");
use MyApp\Controller\GeekContent;
$geek = new GeekContent();
$data = $geek->getResponse();

session_start();

?>
<!DOCTYPE html>
<html lang="pt">

<head>
	<link rel="icon" href="../../../../favicon.png">
	<meta charset="utf-8">
	<title>Limbo</title>
</head>

<link rel="stylesheet" href="../../css/footer.css"/>
<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="../../css/style.css">
<link rel="stylesheet" type="text/css" href="../../css/reset.css">
<link rel="stylesheet" type="text/css" href="../../css/variables.css">
<link rel="stylesheet" href="../../css/componants.css">
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/components/icon.min.css">
<body>
	<header class="main-header">
		<h1 class="title-name">
			<img src="../../../../favicon.png" height="65" style="margin-top: 15px; height: 60px;">
		</h1>
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
							<li class="item-list-dropdown">
								<span class="item-dropdown logout">
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
	<!-- SLIDER -->
	<section class="s-cards-destaques">
		<div class="container">
			<div class="swiper cards-destaques">
				<div class="swiper-wrapper">
					<div class="swiper-slide"><!-- data-aos="flip-up" -->
						<img src="../../img/farcry6.jpg" alt="">
						<div class="card-left">
							<span>Now avalaible</span>
							<h6>FACRY 6</h6>
						</div>
						<div class="card-right">
						</div>
					</div>
					<div class="swiper-slide">
						<img src="../../img/thewitcher.jpg" class="swiper-lazy" alt="">
						<div class="card-left">
							<span>Now avalaible</span>
							<h6>The Witcher</h6>
						</div>
						<div class="card-right">
						</div>
					</div>
					<div class="swiper-slide">
						<img src="../../img/minecraft.jpg" alt="">
						<div class="card-left">
							<span>Now avalaible</span>
							<h6>Minecraft</h6>
						</div>
						<div class="card-right">
						</div>
					</div>
					<div class="swiper-slide">
						<img src="../../img/gta5.jpg" alt="">
						<div class="card-left">
							<span>Now avalaible</span>
							<h6>Minecraft</h6>
						</div>
						<div class="card-right">
						</div>
					</div>
				</div>
				<div class="swiper-button-next"></div>
				<div class="swiper-button-prev"></div>
				<div class="swiper-pagination"></div>
			</div>
		</div>
	</section>


	<!-- CARDS -->
	<section>

		<div class="swiper horizontalBlock">
			<h2>Ultimas Noticias</h2>
			<div class="swiper-wrapper">

				<div class="swiper-slide org-box">
					<div class="card">
						<div class="card-img">
							<!-- medida imagem 304 x 170.63 -->
							<img src="<?php echo $data[1]["img"] ?>	">
						</div>
						<div class="card-title">
							<?php echo $data[1]["name"];?>
						</div>
						<div class="card-desc">
							<?php echo $data[1]["desc"]?>
						</div>
					</div>
				</div>

				<div class="swiper-slide org-box">
					<div class="card">
						<div class="card-img">
							<img src="<?php echo $data[2]["img"] ?>">
						</div>
						<div class="card-title">
							<?php echo $data[2]["name"];?>
						</div>
						<div class="card-desc">
							<?php echo $data[2]["desc"]?>
						</div>
					</div>
				</div>

				<div class="swiper-slide org-box">
					<div class="card">
						<div class="card-img">
							<img src="<?php echo $data[3]["img"] ?>">
						</div>
						<div class="card-title">
							<?php echo $data[3]["name"];?>
						</div>
						<div class="card-desc">
							<?php echo $data[3]["desc"]?>
						</div>
					</div>
				</div>

				<div class="swiper-slide org-box">
					<div class="card">
						<div class="card-img">
							<img src="<?php echo $data[4]["img"] ?>">
						</div>
						<div class="card-title">
							<?php echo $data[4]["name"];?>
						</div>
						<div class="card-desc">
							<?php echo $data[4]["desc"]?>
						</div>
					</div>
				</div>

				<div class="swiper-slide org-box">
					<div class="card">
						<div class="card-img">
							<img src="<?php echo $data[5]["img"] ?>">
						</div>
						<div class="card-title">
							<?php echo $data[5]["name"];?>
						</div>
						<div class="card-desc">
							<?php echo $data[5]["desc"]?>
						</div>
					</div>
				</div>

				<div class="swiper-slide org-box">
					<div class="card">
						<div class="card-img">
							<img src="<?php echo $data[6]["img"] ?>">
						</div>
						<div class="card-title">
							<?php echo $data[6]["name"];?>
						</div>
						<div class="card-desc">
							<?php echo $data[6]["desc"]?>
						</div>
					</div>
				</div>

				<div class="swiper-slide org-box">
					<div class="card">
						<div class="card-img">
							<img src="<?php echo $data[7]["img"] ?>">
						</div>
						<div class="card-title">
							<?php echo $data[7]["name"];?>
						</div>
						<div class="card-desc">
							<?php echo $data[7]["desc"]?>
						</div>
					</div>
				</div>

				<div class="swiper-slide org-box">
					<div class="card">
						<div class="card-img">
							<img src="<?php echo $data[8]["img"] ?>">
						</div>
						<div class="card-title">
							<?php echo $data[8]["name"];?>
						</div>
						<div class="card-desc">
							<?php echo $data[8]["desc"]?>
						</div>
					</div>
				</div>

				<div class="swiper-slide org-box">
					<div class="card">
						<div class="card-img">
							<img src="<?php echo $data[9]["img"] ?>">
						</div>
						<div class="card-title">
							<?php echo $data[9]["name"];?>
						</div>
						<div class="card-desc">
							<?php echo $data[9]["desc"]?>
						</div>
					</div>
				</div>
			</div>
			<div class="swiper-button-next"></div>
			<div class="swiper-button-prev"></div>
			<!-- <div class="swiper-pagination"></div> -->
		</div>



		<div class="swiper horizontalBlock">
			<h2>Novidades Geek</h2>
			<div class="swiper-wrapper">

				<div class="swiper-slide org-box">
					<div class="card">
						<div class="card-img">
							<!-- medida imagem 304 x 170.63 -->
							<img src="<?php echo $data[1]["img"] ?>	">
						</div>
						<div class="card-title">
							<?php echo $data[1]["name"];?>
						</div>
						<div class="card-desc">
							<?php echo $data[1]["desc"]?>
						</div>
					</div>
				</div>

				<div class="swiper-slide org-box">
					<div class="card">
						<div class="card-img">
							<img src="<?php echo $data[2]["img"] ?>">
						</div>
						<div class="card-title">
							<?php echo $data[2]["name"];?>
						</div>
						<div class="card-desc">
							<?php echo $data[2]["desc"]?>
						</div>
					</div>
				</div>

				<div class="swiper-slide org-box">
					<div class="card">
						<div class="card-img">
							<img src="<?php echo $data[3]["img"] ?>">
						</div>
						<div class="card-title">
							<?php echo $data[3]["name"];?>
						</div>
						<div class="card-desc">
							<?php echo $data[3]["desc"]?>
						</div>
					</div>
				</div>

				<div class="swiper-slide org-box">
					<div class="card">
						<div class="card-img">
							<img src="<?php echo $data[4]["img"] ?>">
						</div>
						<div class="card-title">
							<?php echo $data[4]["name"];?>
						</div>
						<div class="card-desc">
							<?php echo $data[4]["desc"]?>
						</div>
					</div>
				</div>

				<div class="swiper-slide org-box">
					<div class="card">
						<div class="card-img">
							<img src="<?php echo $data[5]["img"] ?>">
						</div>
						<div class="card-title">
							<?php echo $data[5]["name"];?>
						</div>
						<div class="card-desc">
							<?php echo $data[5]["desc"]?>
						</div>
					</div>
				</div>

				<div class="swiper-slide org-box">
					<div class="card">
						<div class="card-img">
							<img src="<?php echo $data[6]["img"] ?>">
						</div>
						<div class="card-title">
							<?php echo $data[6]["name"];?>
						</div>
						<div class="card-desc">
							<?php echo $data[6]["desc"]?>
						</div>
					</div>
				</div>

				<div class="swiper-slide org-box">
					<div class="card">
						<div class="card-img">
							<img src="<?php echo $data[7]["img"] ?>">
						</div>
						<div class="card-title">
							<?php echo $data[7]["name"];?>
						</div>
						<div class="card-desc">
							<?php echo $data[7]["desc"]?>
						</div>
					</div>
				</div>

				<div class="swiper-slide org-box">
					<div class="card">
						<div class="card-img">
							<img src="<?php echo $data[8]["img"] ?>">
						</div>
						<div class="card-title">
							<?php echo $data[8]["name"];?>
						</div>
						<div class="card-desc">
							<?php echo $data[8]["desc"]?>
						</div>
					</div>
				</div>

				<div class="swiper-slide org-box">
					<div class="card">
						<div class="card-img">
							<img src="<?php echo $data[9]["img"] ?>">
						</div>
						<div class="card-title">
							<?php echo $data[9]["name"];?>
						</div>
						<div class="card-desc">
							<?php echo $data[9]["desc"]?>
						</div>
					</div>
				</div>
			</div>
			<div class="swiper-button-next"></div>
			<div class="swiper-button-prev"></div>
			<!-- <div class="swiper-pagination"></div> -->
		</div>


	</section>

	<!-- DESTAQUE -->
	<section class="s-cards">
		<div class="container">
			<!-- <div class="titulo-section">
				<span>What's good?</span>
			</div> -->
			<div class="main-cards">
				<div class="card-left">
					<img src="../../img/thewitcher.jpg" alt="">
					<span>Fallout: New Vegas Ultimate Edition</span>
				</div>
				<div class="card-right">
					<div class="card" data-aos="flip-up">
						<img src="../../img/thewitcher-mapa.jpg" alt="">
						<div class="card-text">
							<span>Expansão confirmada</span>
						</div>
					</div>
					<div class="card" data-aos="flip-up">
						<img src="../../img//thewitcher-batle.jpg" alt="">
						<div class="card-text">
							<span>Novos monstros adicinados lore</span>
						</div>
					</div>
					<div class="card" data-aos="flip-down">
						<img src="../../img/thewitcher-person.jpg" alt="">
						<div class="card-text">
							<span>Nova personagem</span>
						</div>
					</div>
					<div class="card" data-aos="flip-down">
						<img src="../../img/fallout3-img.jpg" alt="">
						<div class="card-text">
							<span>Muito Loko</span>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

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
	</section>

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
							<strong class="name-dev">
								Name Developer
							</strong>
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
							<strong class="name-dev">
								Name Developer
							</strong>
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
	<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
	<script type="text/javascript" src="../../js/pages.js"></script>
	<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
	<script>
		var swiper = new Swiper(".cards-destaques", {
			slidesPerView: 1,
			spaceBetween: 32,
			autoplay: {
				delay: 3000,
				disableOnInteraction: false,
				pauseOnMouseEnter: true,
			},
			pagination: {
				el: ".s-cards-destaques .container .swiper-pagination",
				dynamicBullets: true,
			},
			navigation: {
				nextEl: ".s-cards-destaques .swiper-button-next",
				prevEl: ".s-cards-destaques .swiper-button-prev",
			},
		});
		AOS.init({
			duration: 1000,
            once: true, //para a animação acontecer somente uma vez
        });
    </script>
    <script type="text/javascript" src="../../js/conteudo.js"></script>
    <!-- <script type="text/javascript" src="../../js/script.js"></script> -->
    <script type="text/javascript" src="../../js/title-scroll.js"></script>
    <script type="text/javascript" src="../../js/loader.js"></script>
    <script type="text/javascript" src="../../js/header.js"></script>
</body>

</html>
