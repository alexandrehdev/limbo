<?php
require_once("../../../../vendor/autoload.php");

use MyApp\Controller\GetDataLogin;
use MyApp\Controller\Picture;
use MyApp\Controller\User as UserController;

session_start();

if ($_SERVER['REQUEST_METHOD'] == "POST"):
	(new UserController())->verifyAction();
endif;
?>
<!DOCTYPE html>
<html lang="pt">

<head>
	<meta charset="utf-8">
	<title>Limbo</title>

	<link rel="icon" type="image/png" href="../../favicon.png">
	<link rel="stylesheet" type="text/css" href="../../css/globals.css">
	<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
	<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/components/icon.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css">
	<link href="../../css/profile.css" type="text/css" rel="stylesheet"/>
</head>

<body id="body-profile">
	<div id="background-color-pre-loader">
		<header class="main-header">
			<!-- <h1 class="title-name">
			<img src="https://img.icons8.com/office/344/superman.png" height="65" style="margin-top: 15px; height: 60px;">
		</h1> -->
			<nav class="navigation">
				<ul class="list-nav">
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

				</ul>
			</nav>

			<div class="user-account-item" data-type-element="dropdown">
				<strong class="user-account-text" style="text-transform:uppercase;">
					<div class="small-profile">
						<img src="../../img/userprofile/selectedImages/<?=$_SESSION['profile_usr']?>">
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
		<!-- área de informações do usuário -->
		<!---->
		<main>
			<div class="profile">
				<div class="user-content">
					<form id="form-change-image-profile" action="<?php $_SERVER['PHP_SELF'] ?>" method="POST" enctype="multipart/form-data">
						<div class="profile-image">
							<img id="image" src="../../img/userprofile/selectedImages/<?= $_SESSION['profile_usr'] ?>" height="150px">
							<label for="file" id="button-change-image" class="change-image">
								Alterar Image
							</label>
							<input id="file" name="userprofile" type="file" />

						</div>
						<button id="submit-image-user" type="submit" name="profile-btn" disabled>Enviar Image para o Perfil</button>
					</form>
					<div class="nickname">
						<span><?= strtoupper($_SESSION['username']); ?></span>
					</div>
					<div id="status-online" class="status status-save">
						<span>Online</span>
					</div>
				</div>

				<div class="info-account">
					<!--  DROPDOWN -->
					<div class="accordion">
						<div class="button-info-account">
							<img class="image-arrow" src="../../img/arrow.svg" alt="arrow" />
							<span class="text-accordion">Informação de Conta</span>
						</div>
						<div class="content-info-account">
							<span><strong>Quando a conta foi criada:</strong> 22/09/2001</span>

							<span><strong>Descrição:</strong> Esse é somente um perfil para teste</span>
						</div>
					</div>

					<div class="accordion">
						<div class="button-info-account">
							<img class="image-arrow" src="../../img/arrow.svg" alt="arrow" />
							<span class="text-accordion">Configuração de Conta</span>
						</div>
						<div class="content-info-account align-items-center">
							<button class="button-update-status">
								Atualizar Status da conta
							</button>
							<button class="button-delete-account">Apagar</button>
						</div>
					</div>
				</div>
				<div id="modal-change-status">
					<img id="icon-leave-modal" src="../../img/icon-leave.svg" alt="button icon leave modal" />
					<div id="current-status">
						<span class="current-status-title">Status Atual: </span>
						<div id="status-online" class="status status-current status-big no-margin-top">
							<span>Online</span>
						</div>
					</div>
					<div id="interface-control-status">
						<span class="control-status-title">Escolha seu novo status: </span>
						<div id="status-online" class="status status-medium no-margin-top status-item status-clickable" data-type="online">
							<span>Online</span>
						</div>
						<div id="status-absent" class="status status-medium no-margin-top status-item status-clickable" data-type="absent">
							<span>Ausente</span>
						</div>
						<div id="status-occupied" class="status status-medium no-margin-top status-item status-clickable" data-type="occupied">
							<span>Ocupado</span>
						</div>
						<div id="status-offline" class="status status-medium no-margin-top status-item status-clickable" data-type="offline">
							<span>Offline</span>
						</div>
					</div>
					<button id="apply-status">
						Aplicar
					</button>
				</div>

				<div class="modal-delete-account">
					<span class="modal-text">
						Tem certeza que quer apagar essa conta?
					</span>
					<div class="modal-area-buttons">
						<button class="modal-button-cancel-delete-account">
							Cancelar
						</button>
						<form action="<?= $_SERVER['PHP_SELF']?>" method="POST">
							<input type="submit" name="btndelete" class="modal-button-delete-account" value="Apagar conta" />
						</form>
					</div>
				</div>
			</div>
		</main>

		<footer class="m-footer" role="footer">
			<div class="footer-container">
				<div class="footer-row">
					<div class="footer-col">
						<h4>Sobre</h4>
						<ul>
							<li><a href="../apiFreeGames/index.php">Jogos Grátis</a></li>
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

	<script type="text/javascript" src="../../js/pages.js"></script>
	<script type="text/javascript" src="../../js/header.js"></script>
	<script type="text/javascript" src="../../js/profile.js"></script>
</body>

</html>
