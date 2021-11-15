<?php 
session_start();
?>
<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<title>Limbo</title>

	<link rel="icon" type="image/png" href="../../favicon.png">
	<link rel="stylesheet" href="../../css/footer.css"/>
	<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
	<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="../../css/style.css">
	<link rel="stylesheet" type="text/css" href="../../css/reset.css">
	<link rel="stylesheet" type="text/css" href="../../css/variables.css">
	<link rel="stylesheet" href="../../css/componants.css">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/components/icon.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css">
</head>

<body id="body-profile">
	<header class="main-header">
		<h1 class="title-name">Limbo</h1>
		<nav class="navigation">
			<ul class="list-nav">
				<li class="item-nav">
					<a href="../../index.php">Home</a>
					<div class="line"></div>
				</li>
				<li class="item-nav">
					<a href="index.php">Navegar</a>
					<div class="line"></div>
				</li>
				<li class="item-nav">
					<a href="../../pages/apiFreeGames/index.php">Jogos Gratis</a>
					<div class="line"></div>
				</li>
				<li class="item-nav">
					<a href="../../pages/sobre/index.php">Info</a>
					<div class="line"></div>
				</li>
				<li class="item-nav">
					<strong class="user-account-text" style="text-transform:uppercase;">
						<i class="user icon"></i>
						<?php 
							echo strtoupper($_SESSION['login_user']);
						?>
					</strong>
					<div class="line dropdown">
						<ul class="list-dropdown">
							<li class="item-list-dropdown">
								<a href="../../pages/profile/index.php">
								<span class="item-dropdown" class="profile">Perfil</span>
								</a>
								<div class="line"></div>
							</li>
							<li class="item-list-dropdown">
									<span class="item-dropdown" class="logout">
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
    
    <main id="main-profile">
    	<div class="user-block">
    		<h1>Player 1</h1>
    		<div class="user-content">
    			<div class="area-user-img">
    				<!-- foto do muito loko -->
    				<img src="https://i.pinimg.com/564x/ca/0b/e0/ca0be062b256c5c1afb277a8525a3ac9.jpg" height="200">
    				<input type="file" value="Mudar foto" name="">
    			</div>
    			<div class="user-info">
    				<div class="fields">
    					<div class="field">
    						<span>
    							Nome:  
    						</span>
    						<div class="input-area">
    							<span class="value">
    								<?php echo "Calma que ainda vai"; ?> 
    							</span>
    							<div class="input">
    								<input
    									type="text"
    									name="nome"
    									value="Calma que ainda vai"
    								/>
    							</div>
    						</div>
    						<button class=" button-field change-field">
    							<i class="fas fa-pencil-alt fa-2x"></i>
    						</button>
    						<button class="
    						button-field
    						apply-correct">
    							<i class="fas fa-check fa-2x"></i>
    						</button>
    					</div>
    					<div class="field">
    						<span>
    							Email:  
    						</span>
    						<div class="input-area">
    							<span class="value">
    								<?php echo $_SESSION['login_user'] ?>
    							</span>
    							<div class="input">
    								<input
    									type="text"
    									name="nome"
    								/>
    							</div>
    						</div>
    						<button class=" button-field change-field">
    							<i class="fas fa-pencil-alt fa-2x"></i>
    						</button>
    						<button class="
    						button-field
    						apply-correct">
    							<i class="fas fa-check fa-2x"></i>
    						</button>
    					</div>
    					<div class="field">
    						<span>
    							Status: 
    						</span>
    						<div class="input-area">
    							<span class="value">
    								<?php echo "sei la.. sou gostoso"; ?>
    							</span>
    							<div class="input">
    								<textarea name="status">
    									
    								</textarea>
    							</div>
    						</div>
    						<button class=" button-field change-field">
    							<i class="fas fa-pencil-alt fa-2x"></i>
    						</button>
    						<button class="
    						button-field
    						apply-correct">
    							<i class="fas fa-check fa-2x"></i>
    						</button>
    					</div>
    				</div>
    			</div>
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
    <!-- <script type="text/javascript" src="js/script.js"></script> -->
    <script type="text/javascript" src="js/field.js"></script>
    <script type="text/javascript" src="../../js/header.js"></script>
</body>

</html>