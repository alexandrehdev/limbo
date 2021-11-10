<?php 
session_start();
?>
<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<title>Limbo</title>
</head>
<link rel="icon" type="image/png" href="../../favicon.png">
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
										Logout
									</span>
								<div class="line"></div>
							</li>
						</ul>
					</div>
				</li>
			</ul>
		</nav>
	</header>
    	
    	<div class="user-block">
    		<h1>Player 1</h1>
    		<div class="content">
    			<div class="user-img">
    				<!-- foto do muito loko -->
    				<img src="https://i.pinimg.com/564x/ca/0b/e0/ca0be062b256c5c1afb277a8525a3ac9.jpg" height="200">
    				<input type="file" value="Mudar foto" name="">
    			</div>
    			<div class="user-info">
    				<div class="user-content">
    					<p>Nome: <?php echo "Calma que ainda vai"; ?>  </p>
    					<p>Email: <?php echo $_SESSION['login_user'] ?> </p>
    					<p>Status: <?php echo "sei la.. sou gostoso"; ?></p>
    				</div>
    			</div>
    		</div>
    	</div>

    <script type="text/javascript" src="js/script.js"></script>
    <script type="text/javascript" src="../../js/header.js"></script>
</body>

</html>