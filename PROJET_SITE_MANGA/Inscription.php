<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title>Inscription mangacity</title>
	<link rel="stylesheet" type="text/css" href="PROJET_M.css" />
	<!-- UIkit CSS -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.13.7/dist/css/uikit.min.css" />

	<!-- UIkit JS -->
	<script src="https://cdn.jsdelivr.net/npm/uikit@3.13.7/dist/js/uikit.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/uikit@3.13.7/dist/js/uikit-icons.min.js"></script>




</head>

<body class="fluid">
	<main id="wrapper">
		<header id="header">

			<!-- carré du logo -->
			<div id="logo" style=" height: auto;">
				<img src="../PROJET_SITE_MANGA/IMAGE/tux.png" alt="marche pas" style=" height: 50px; " />
			</div>

			<div id="header-middle">
				<div id="search">

					<div>
						<span class="deleteicon"></span>
						<label for="tvSearch">
							<input type="search" name="search" class="form-control deletable" autocomplete="off" id="tvSearch" placeholder="Live Search" />
						</label>
						<!-- boutton recherche à gauche de la barre de recherche -->
						<button type="button" aria-label="Live Search">
							<i class="icon-search"></i>
						</button>
					</div>
					<div id="search-results" style="display: none">
						<div class="section-heading">Best Results</div>
						<div id="search-response"></div>
					</div>
				</div>

				<style>
					.imageBox img {
						width: 40px;
						margin-top: 18px;
						margin-left: 10px;
						height: 40px;
					}

					.imageBox {
						position: relative;
						float: left;
					}

					.imageBox .hoverImg {
						position: absolute;
						left: 0;
						top: 0;
						display: none;
					}

					.imageBox:hover .hoverImg {
						display: block;
					}
				</style>
				<a href="https://discord.gg/MAz276XB" target="_blank" class="imageBox">
					<div class="imageInn">
						<img src="../PROJET_SITE_MANGA/IMAGE/discord.png">
					</div>
					<div class="hoverImg">
						<img src="../PROJET_SITE_MANGA/IMAGE/discord-hover.png" alt="">
					</div>
				</a>


				<div id="user">
					<div class="left floated author">
						<a class="ui button secondary" onlyusers=""><i class="icon-torso"></i> Sign In</a>
						<a href="Inscription.php" class="ui button secondary hidden-xs signup"><i class="icon-plus-circled"></i> Sign Up</a>
					</div>
				</div>
			</div>
		</header>
		<div id="wrapper-inner">
			<div class="triggered-overlay"></div>
			<aside id="primary-sidebar" class="">
				<!--barre coté gauche -->
				<div id="sidebar-inner" class="scrollbar-macosx">
					<!-- block menu -->

					<a href="#offcanvas-slide" class="uk-button uk-button-default" uk-toggle>Open</a>

					<div id="offcanvas-slide" uk-offcanvas>
						<div class="uk-offcanvas-bar">

							<ul class="uk-nav uk-nav-default">
								<li class="uk-nav-header"><a href="#">Home</a></li>
								<li class="uk-nav-header"><a href="#">Popular Manga</a></li>
								<li class="uk-nav-header"><a href="#">Manga List</a></li>
								<li class="uk-nav-header"><a href="#">Latest Releases</a></li>
								<li class="uk-nav-header"><a href="#">Advanced Search</a></li>
								<li class="uk-nav-header"><a href="#">Collections</a></li>

								<li class="uk-nav-divider"></li>
								<li class="uk-nav-header">Catégories</li>
								<li><a href="#">Action</a></li>
								<li><a href="#">Adventure</a></li>
								<li><a href="#">Comedy</a></li>
								<li><a href="#">Fantasy</a></li>
								<!-- <li><a href="#">Historical</a></li>-->
								<li><a href="#">Horror</a></li>
								<li><a href="#">Isekai</a></li>
								<li><a href="#">Magic</a></li>
								<!-- <li><a href="#">Martial Arts</a></li>
                                <li><a href="#">Mecha</a></li>-->
								<!--<li><a href="#">Mind Game</a></li>
                                <li><a href="#">Mystery</a></li>
                                <li><a href="#">Psychological</a></li>
                                <li><a href="#">Romance</a></li>-->
								<li><a href="#">Sci fi</a></li>




							</ul>

						</div>
					</div>

				</div>
			</aside>
			<!-- gros bloc central -->
			<div id="content">
				<div class="inner-content container " id="page-index">




					<?php
					$c = new mysqli("localhost", "root", "", "manga"); // On se connecte à la base de données "situation-1"
					if ($c->connect_error) {
						die("Connection failed: " . $c->connect_error);
					} else {
						echo "Connected successfully";
					}
					$inscription_erreur = ''; // Message en cas d'erreur du formulaire

					// Méthode d'inscription dans la base de données

					if (isset($_POST['inscription_submit'])) {
						$inscription_nom = htmlspecialchars(trim($_POST['nom'])); // Récupération du "nom"
						$inscription_mail = htmlspecialchars(trim($_POST['mail'])); // Récupération du "prenom"
						$inscription_age = htmlspecialchars(trim($_POST['age'])); // Récupération du "mot de passe 1"
						$inscription_identifiant = htmlspecialchars(trim($_POST['identifiant'])); // Récupération du "mot de passe 2"
						$inscription_mot_de_passe = htmlspecialchars(trim($_POST['mot_de_passe'])); // Récupération du "mot de passe 2"

						if ($inscription_nom && $inscription_mail && $inscription_age && $inscription_identifiant && $inscription_mot_de_passe) {

						
								$sql = "INSERT INTO inscription (nom, mail, age, identifiant, mot_de_passe) VALUES ('$inscription_nom','$inscription_mail','$inscription_age','$inscription_identifiant','$inscription_mot_de_passe')"; // On créer la requête
								$res = $c->query($sql); // On envoie la requête
								mysqli_close($c); // On ferme la connexion à la base de données "situation-1"


								exit;
							} else {

								$inscription_erreur = '<p class="px-4 py-2">Le mot de passe ne correspond pas</p>';
							}
						} else {

							$inscription_erreur = '<p class="px-4 py-2">Veuillez saisir tous les champs !</p>';
						}
					


					?>
					<form class="mt-5" method="post" action="Inscription.php">


						<input type="text" id="nom" name="nom" placeholder="Votre nom">
						<br></br>
						<input type="text" id="mail" name="mail" placeholder="Votre mail">
						<br></br>
						<input type="int" id="age" name="age" placeholder="Votre age">
						<br></br>
						<input type="text" id="identifiant" name="identifiant" placeholder="Votre identifiant">

						<br></br>
						<input type="password" id="mot_de_passe" name="mot_de_passe" placeholder="Mot de passe">
						Rentrez un mot de pass de huit caractères minimum comportant au moins une lettre minuscule, une lettre majuscule, un chiffre et un caractère spéciale
						<br></br>
						<input type="submit" id="inscription_submit" name="inscription_submit" value="Inscription">

						<div class="bg-red-600 mt-3">

							<?php echo $inscription_erreur; ?>

						</div>

					</form>


				</div>
			</div>
		</div>
	</main>




</body>

</html>