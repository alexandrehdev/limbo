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
    <section class="s-profile">
        <div class="container">
            <div class="main-profile">
                <div class="img">
                    <img src="../../img/thewitcher-person.jpg" alt="">
                </div>
                <div class="text">
                    <form action="" method="POST"> 
                        <input type="text" value="Cabeca azul" readonly>
                        <textarea name="" id="" cols="30" rows="10" readonly>
                            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eius, esse repellendus illum similique earum ab cumque fugit facilis? Maiores accusamus odio inventore incidunt labore omnis! Nam iste quaerat nihil doloremque?
                        </textarea>
                        <a href=""></a>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <script type="text/javascript" src="js/script.js"></script>
    <script type="text/javascript" src="../../js/header.js"></script>
</body>

</html>