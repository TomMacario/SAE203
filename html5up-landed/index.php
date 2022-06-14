<!DOCTYPE HTML>
<html>
	<head>
		<title>InfoBlog</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
	</head>
	<body class="is-preload landing">
		<div id="page-wrapper">

			<!-- Header -->
			<?php
				require "header.php";
			?>
			<!-- Banner -->
				<section id="banner">
					<div class="content">
						<header>
							<?php
							// Return current date from the remote server
							$date = date('d-m-y h:i:s');
							echo $date;
							?>

							<h2>InfoBlog, l'information de demain</h2>
							<p>Ici pas de fake news<br />
							Juste des informations confirmées</p>
						</header>
						<span class="image"><img src="images/logo.png" alt="" /></span>
					</div>
					<a href="#one" class="goto-next scrolly">Next</a>
				</section>

			<!-- One -->
				<section id="one" class="spotlight style1 bottom">
					<span class="image fit main"><img src="images/Ukraine.jpg" alt="" /></span>
					<div class="content">
						<div class="container">
							<div class="row">
								<div class="col-4 col-12-medium">
									<header id ="Ukraine">
										<h2>En Europe centrale, la générosité envers les réfugiés ukrainiens s’étiole</h2>
										<p>Face au coût financier des mesures et à certains abus, les pays en première ligne dans l’accueil des exilés commencent à revoir leur politique à la baisse.</p>
									</header>
								</div>
								<div class="col-4 col-12-medium">
									<p>Fin de la gratuité des transports, diminutions des allocations, évacuation des réfugiés des hôtels pour les transférer dans des camps nettement moins confortables… Après avoir ouvert grandes leurs portes, les pays d’Europe centrale, en première ligne pour recevoir les réfugiés ukrainiens depuis le début de la guerre, commencent à revoir leur politique d’accueil à la baisse.</p>
								</div>
								<div class="col-4 col-12-medium">
									<p>Si ces mesures sont souvent prises au nom de la lutte contre les abus ou pour des raisons financières évidentes alors que l’inflation fait rage, elles annoncent aussi l’essoufflement de la solidarité observée au début du conflit, dans un contexte où les flux d’arrivées se sont quasi taris et où certains Ukrainiens décident même de rentrer chez eux.</p>
									<ul class="actions">
										<li><a href="no-sidebar.html" class="button">Learn More</a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
					<a href="#two" class="goto-next scrolly">Next</a>
				</section>

			<!-- Two -->
				<section id="two" class="spotlight style2 right">
					<span class="image fit main"><img src="images/stade.jpg" alt="" /></span>
					<div class="content">
						<header id = "Stade">
							<h2>Incidents au Stade de France. Cinq questions sur la suppression des vidéos de surveillance</h2>
							<p>La suppression des images de vidéos de surveillance du Stade de France enregistrées lors de la soirée du 28 mai dernier, révélées lors des auditions au Sénat, ce jeudi 9 juin, ont donné une nouvelle tournure à l’affaire. Voici les questions qui se posent après ces nouvelles révélations.</p>
						</header>						
						<ul class="actions">
							<li><a href="right-sidebar.html" class="button">Learn More</a></li>
						</ul>
					</div>
					<a href="#three" class="goto-next scrolly">Next</a>
				</section>

			<!-- Three -->
				<section id="three" class="spotlight style3 left">
					<span class="image fit main bottom"><img src="images/arnaque.jpg" alt="" /></span>
					<div class="content">
						<header id = "Arnaque">
							<h2>Arnaques aux crédits entre particuliers : voici ce qui se cache derrière cette fraude qui se répand</h2>
							<p>+ 15 % : c’est la hausse du nombre d’arnaques recensées par le Service statistique ministériel de la Sécurité intérieure. Zoom sur l’une d’entre elles, la fraude aux crédits entre particuliers sur Internet.</p>
						</header>
						<ul class="actions">
							<li><a href="left-sidebar.html" class="button">Learn More</a></li>
						</ul>
					</div>
					<a href="#four" class="goto-next scrolly">Next</a>
				</section>

			
				<footer id="footer">
					<ul class="copyright">
						<li>Réalisé par Matthieu Falezan, Tom Macario, Alexis Pocard et Lucien Hervé</li>
						<li>SAE 2.03</a></li>
					</ul>
				</footer>

		</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/jquery.dropotron.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>