<?php
require_once("../../../../vendor/autoload.php");

use MyApp\Controller\GeekContent;
use MyApp\Controller\LoadApi;

$geek = new GeekContent();
$data = $geek->getResponse();

$api = new LoadApi();
$response = $api->getResult();

session_start();

?>
<!DOCTYPE html>
<html lang="pt">

<head>
	<meta charset="utf-8">

	<title>Limbo</title>

	<link rel="icon" href="../../../../favicon.png">
	<link rel="stylesheet" type="text/css" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
	<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/components/icon.min.css">
	<link rel="stylesheet" type="text/css" href="../../css/globals.css">
	<link rel="stylesheet" type="text/css" href="../../css/conteudo.css">
</head>


<body>
	<div id="background-color-pre-loader">
		<header class="main-header">
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
		<!-- SLIDER -->

		<section class="s-cards-destaques">
			<!-- <h1 class="title-card-destaque">Ultimas noticias</h1> -->
			<div class="swiper cards-destaques">
				<div class="swiper-wrapper">
					<div class="swiper-slide">
						<img src="../../img/game-console.webp" alt="">
						<article class="article-detach">
							<h6 class="slide-title">playstation 4</h6>
							<span class="slide-sub-title">Alguns jogos na loja apresentam desconto</span>
						</article>
					</div>
					<div class="swiper-slide">
						<img src="../../img/celgamin.webp" class="swiper-lazy" alt="">
						<div class="article-detach">
							<h6 class="slide-title">celulares gaming</h6>
							<span class="slide-sub-title">Celulares apresentam configuração gaming</span>
						</div>
					</div>
					<div class="swiper-slide">
						<img src="../../img/mario.webp" alt="">
						<div class="article-detach">
							<h6 class="slide-title">nintendo</h6>
							<span class="slide-sub-title">empresa pode estar trabalhando em um emulador para 3DS</span>
						</div>
					</div>
					<div class="swiper-slide">
						<img src="../../img/board.webp" alt="">
						<div class="article-detach">
							<h6 class="slide-title">rtx 4090ti</h6>
							<span class="slide-sub-title">nova placa de video promete o dobro de desempenho</span>
						</div>
					</div>
				</div>
				<div class="swiper-button-next">
				</div>
				<div class="swiper-button-prev">

				</div>
			</div>
		</section>


		<!-- CARDS -->
		<section class="sections-card-others">
			<div class="container">
				<section class="section-row-card-others">
					<h2 class="title-cards-others">Ultimas Noticias</h2>
					<div class="container-swiper-cards-normal">
						<div class="swiper cards-normal">
							<div class="swiper-wrapper">

								<div class="swiper-slide org-box">
									<div class="card">
										<div class="card-img">
											<img src="<?= $data[1]["img"] ?>	">
										</div>
										<div class="card-title">
											<?= $data[1]["name"]; ?>
										</div>
										<div class="card-desc">
											<?= $data[1]["desc"]; ?>
										</div>
									</div>
								</div>

								<div class="swiper-slide org-box">
									<div class="card">
										<div class="card-img">
											<img src="<?= $data[2]["img"] ?>">
										</div>
										<div class="card-title">
											<?= $data[2]["name"]; ?>
										</div>
										<div class="card-desc">
											<?= $data[2]["desc"] ?>
										</div>
									</div>
								</div>

								<div class="swiper-slide org-box">
									<div class="card">
										<div class="card-img">
											<img src="<?= $data[3]["img"] ?>">
										</div>
										<div class="card-title">
											<?= $data[3]["name"]; ?>
										</div>
										<div class="card-desc">
											<?= $data[3]["desc"] ?>
										</div>
									</div>
								</div>

								<div class="swiper-slide org-box">
									<div class="card">
										<div class="card-img">
											<img src="<?= $data[4]["img"] ?>">
										</div>
										<div class="card-title">
											<?= $data[4]["name"]; ?>
										</div>
										<div class="card-desc">
											<?= $data[4]["desc"] ?>
										</div>
									</div>
								</div>

								<div class="swiper-slide org-box">
									<div class="card">
										<div class="card-img">
											<img src="<?= $data[5]["img"] ?>">
										</div>
										<div class="card-title">
											<?= $data[5]["name"]; ?>
										</div>
										<div class="card-desc">
											<?= $data[5]["desc"]; ?>
										</div>
									</div>
								</div>

								<div class="swiper-slide org-box">
									<div class="card">
										<div class="card-img">
											<img src="<?= $data[6]["img"] ?>">
										</div>
										<div class="card-title">
											<?= $data[6]["name"]; ?>
										</div>
										<div class="card-desc">
											<?= $data[6]["desc"]; ?>
										</div>
									</div>
								</div>

								<div class="swiper-slide org-box">
									<div class="card">
										<div class="card-img">
											<img src="<?= $data[7]["img"] ?>">
										</div>
										<div class="card-title">
											<?= $data[7]["name"]; ?>
										</div>
										<div class="card-desc">
											<?= $data[7]["desc"] ?>
										</div>
									</div>
								</div>

								<div class="swiper-slide org-box">
									<div class="card">
										<div class="card-img">
											<img src="<?= $data[8]["img"] ?>">
										</div>
										<div class="card-title">
											<?= $data[8]["name"]; ?>
										</div>
										<div class="card-desc">
											<?= $data[8]["desc"] ?>
										</div>
									</div>
								</div>

								<div class="swiper-slide org-box">
									<div class="card">
										<div class="card-img">
											<img src="<?= $data[9]["img"] ?>">
										</div>
										<div class="card-title">
											<?= $data[9]["name"]; ?>
										</div>
										<div class="card-desc">
											<?= $data[9]["desc"] ?>
										</div>
									</div>
								</div>
							</div>
							<div class="swiper-pagination"></div>
						</div>
					</div>
				</section>

				<section class="section-row-card-others">
					<h2 class="title-cards-others">Novidades geek</h2>
					<div class="container-swiper-cards-normal">
						<div class="swiper cards-normal">
							<div class="swiper-wrapper">

								<div class="swiper-slide org-box">
									<div class="card">
										<div class="card-img">
											<!-- medida imagem 304 x 170.63 -->
											<img src="<?= $data[1]["img"] ?>	">
										</div>
										<div class="card-title">
											<?= $data[1]["name"]; ?>
										</div>
										<div class="card-desc">
											<?= $data[1]["desc"] ?>
										</div>
									</div>
								</div>

								<div class="swiper-slide org-box">
									<div class="card">
										<div class="card-img">
											<img src="<?= $data[2]["img"] ?>">
										</div>
										<div class="card-title">
											<?= $data[2]["name"]; ?>
										</div>
										<div class="card-desc">
											<?= $data[2]["desc"] ?>
										</div>
									</div>
								</div>

								<div class="swiper-slide org-box">
									<div class="card">
										<div class="card-img">
											<img src="<?= $data[3]["img"] ?>">
										</div>
										<div class="card-title">
											<?= $data[3]["name"]; ?>
										</div>
										<div class="card-desc">
											<?= $data[3]["desc"] ?>
										</div>
									</div>
								</div>

								<div class="swiper-slide org-box">
									<div class="card">
										<div class="card-img">
											<img src="<?= $data[4]["img"] ?>">
										</div>
										<div class="card-title">
											<?= $data[4]["name"]; ?>
										</div>
										<div class="card-desc">
											<?= $data[4]["desc"] ?>
										</div>
									</div>
								</div>

								<div class="swiper-slide org-box">
									<div class="card">
										<div class="card-img">
											<img src="<?= $data[5]["img"] ?>">
										</div>
										<div class="card-title">
											<?= $data[5]["name"]; ?>
										</div>
										<div class="card-desc">
											<?= $data[5]["desc"] ?>
										</div>
									</div>
								</div>

								<div class="swiper-slide org-box">
									<div class="card">
										<div class="card-img">
											<img src="<?= $data[6]["img"] ?>">
										</div>
										<div class="card-title">
											<?= $data[6]["name"]; ?>
										</div>
										<div class="card-desc">
											<?= $data[6]["desc"] ?>
										</div>
									</div>
								</div>

								<div class="swiper-slide org-box">
									<div class="card">
										<div class="card-img">
											<img src="<?= $data[7]["img"] ?>">
										</div>
										<div class="card-title">
											<?= $data[7]["name"]; ?>
										</div>
										<div class="card-desc">
											<?= $data[7]["desc"] ?>
										</div>
									</div>
								</div>

								<div class="swiper-slide org-box">
									<div class="card">
										<div class="card-img">
											<img src="<?= $data[8]["img"] ?>">
										</div>
										<div class="card-title">
											<?= $data[8]["name"]; ?>
										</div>
										<div class="card-desc">
											<?= $data[8]["desc"] ?>
										</div>
									</div>
								</div>

								<div class="swiper-slide org-box">
									<div class="card">
										<div class="card-img">
											<img src="<?= $data[9]["img"] ?>">
										</div>
										<div class="card-title">
											<?= $data[9]["name"]; ?>
										</div>
										<div class="card-desc">
											<?= $data[9]["desc"] ?>
										</div>
									</div>
								</div>
							</div>
							<div class="swiper-pagination"></div>
						</div>
					</div>
				</section>

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
						<img src="../../img/thewitcher-mapa.jpg" alt="">
						<span>Fallout: New Vegas Ultimate Edition</span>
					</div>
					<div class="grid-cards-right">
						<div class="card" data-aos="flip-up">
							<img src="../../img/thewitcher-mapa.jpg" alt="">
							<div class="card-text">
								<span>Expansão confirmada</span>
							</div>
						</div>
						<div class="card" data-aos="flip-up">
							<img src="../../img//thewitcher-batle.jpg" alt="">
							<div class="card-text">
								<span>Novos monstros adicinados</span>
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

		<div class="horizontalBlock">
			<h2 id="recommended">Recomendações</h2>
			<div class="reco">

				<div class="org-box">
					<div class="card-recommended">
						<div class="card-image">
							<!-- medida imagem 304 x 170.63 -->
							<img src="<?= $response[55]["thumbnail"] ?>	">
						</div>
						<span class="card-title">
							<?= $response[55]["title"]; ?>
						</span>
					</div>
				</div>

				<div class="org-box">
					<div class="card-recommended">
						<div class="card-image">
							<!-- medida imagem 304 x 170.63 -->
							<img src="<?= $response[56]["thumbnail"] ?>	">
						</div>
						<span class="card-title">
							<?= $response[56]["title"]; ?>
						</span>
					</div>
				</div>

				<div class="org-box">
					<div class="card-recommended">
						<div class="card-image">
							<!-- medida imagem 304 x 170.63 -->
							<img src="<?= $response[57]["thumbnail"] ?>	">
						</div>
						<span class="card-title">
							<?= $response[57]["title"]; ?>
						</span>
					</div>
				</div>

				<div class="org-box">
					<div class="card-recommended">
						<div class="card-image">
							<!-- medida imagem 304 x 170.63 -->
							<img src="<?= $response[58]["thumbnail"] ?>	">
						</div>
						<span class="card-title">
							<?= $response[58]["title"]; ?>
						</span>
					</div>
				</div>

				<div class="org-box">
					<div class="card-recommended">
						<div class="card-image">
							<!-- medida imagem 304 x 170.63 -->
							<img src="<?= $response[59]["thumbnail"] ?>	">
						</div>
						<span class="card-title">
							<?= $response[59]["title"]; ?>
						</span>
					</div>
				</div>

				<div class="org-box">
					<div class="card-recommended">
						<div class="card-image">
							<!-- medida imagem 304 x 170.63 -->
							<img src="<?= $response[60]["thumbnail"] ?>	">
						</div>
						<span class="card-title">
							<?= $response[60]["title"]; ?>
						</span>
					</div>
				</div>
			</div>
			<!-- <div class="swiper-pagination"></div> -->
		</div>

		<footer class="m-footer" role="footer">
			<div class="footer-container">
				<div class="footer-row">
					<div class="footer-col">
						<h4>Sobre</h4>
						<ul>
							<li><a href="../apiFreeGames/index.php">Jogos Gratis</a></li>
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

	<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
	<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
	<script type="text/javascript" src="../../js/aosConfig.js"></script>
	<script type="text/javascript" src="../../js/pages.js"></script>
	<script type="text/javascript" src="../../js/conteudo.js"></script>
	<script type="text/javascript" src="../../js/header.js"></script>
</body>

</html>
