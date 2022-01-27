<?php 
session_start();
?>
<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<title>Limbo</title>

	<link rel="icon" type="image/png" href="../../favicon.png">
	<link rel="stylesheet" href="../../css/footer.css" />
	<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
	<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="../../css/style.css">
	<link rel="stylesheet" type="text/css" href="../../css/reset.css">
	<link rel="stylesheet" type="text/css" href="../../css/variables.css">
	<link rel="stylesheet" href="../../css/componants.css">
	<link rel="stylesheet" type="text/css"
	href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/components/icon.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css">
</head>

<body id="body-profile">
	<header class="main-header">
		<h1 class="title-name">Limbo</h1>
		<nav class="navigation">
			<ul class="list-nav">
				<li class="item-nav">
					<a href="../intro/index.php">Home</a>
					<div class="line"></div>
				</li>
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
				<li class="item-nav">
					<strong class="user-account-text" style="text-transform:uppercase;">
						<i class="user icon"></i>
						<?php 
						echo strtoupper($_SESSION['user']['username']);
						?>
					</strong>
					<div class="line dropdown">
						<ul class="list-dropdown">
							<!-- <li class="item-list-dropdown">
								<a href="index.php">
									<span class="item-dropdown" class="profile">Perfil</span>
								</a>
								<div class="line"></div>
							</li> -->
							
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

	<!-- área de informações do usuário -->
	<main>
		<div class="profile">
			<div class="user-content">	
				<div class="profile-image">
					<img 
						id="image"
						src="../../img/dev-example.png" 
						height="150px"
					>
					
					<label 
						for="file"
						id="button-change-image"
						class="change-image"
					>
						Alterar Image
					</label>
					<input
						id="file"
						
						type="file"
					/>
				</div>
				<div class="nickname">
					<span><?php echo strtoupper($_SESSION['user']['username']);?></span>
				</div>
				<div class="status">
					<span>Online</span>
				</div>
			</div>

			<div class="info-account"> <!--  DROPDOWN -->
				<div class="accordion">
					<div class="button-info-account">
						<img
							class="image-arrow"
							src="../../img/arrow.svg"
							alt="arrow"
						/>
						<span class="text-accordion">Informação de Conta</span>
					</div>
					<div class="content-info-account">
						<span><strong>Quando a conta foi criada:</strong> 22/09/2001</span>

						<span><strong>Descrição:</strong> Esse é somente um perfil para teste</span>
					</div>
				</div>

				<div class="accordion">
					<div class="button-info-account">
						<img
							class="image-arrow"
							src="../../img/arrow.svg"
							alt="arrow"
						/>
						<span class="text-accordion">Configuração de Conta</span>
					</div>
					<div class="content-info-account align-items-center">
						<button class="button-update-status">
							Atualizar Status da conta
						</button>

						<button class="button-delete-accound">Apagar</button>
					</div>
				</div>
			</div>
			<div id="modal-change-status">

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
<script type="text/javascript" src="../../js/profileLogout.js"></script>
<script type="text/javascript" src="../../js/profileField.js"></script>
<script type="text/javascript" src="../../js/header.js"></script>
<script type="text/javascript" src="../../js/profile.js"></script>
</body>

</html>