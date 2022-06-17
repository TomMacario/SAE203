<!DOCTYPE HTML>
<html>

<head>
	<title>InfoBlog</title>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
	<link rel="stylesheet" href="../assets/css/main.css" />
	<noscript>
		<link rel="stylesheet" href="../assets/css/noscript.css" />
	</noscript>
	<style>
		.wrapper {
			width: 360px;
			padding: 20px;
		}
	</style>
</head>

<body class="is-preload landing">
	<div id="page-wrapper">
		<!-- Header -->
		<?php
		require "../header.php";
		require_once "../config.php";
		?>
		<div id="main" style="margin-top:5%;">
			<div class="content">
				<div class="container">
					<div class="row">
						<?php
						$sql = "SELECT id, username, created_at FROM users";
						$stmt = mysqli_prepare($link, $sql);

						if (mysqli_stmt_execute($stmt)) {
							mysqli_stmt_bind_result($stmt, $id, $username, $crea);
							while (mysqli_stmt_fetch($stmt)) {
								echo '<div class="col-4 col-12-medium card">';
								echo '<form action="deleteUser.php" method="post">';
								echo '<input type="hidden" name="user" value="' . $id . '">';
								echo '<div class="card-body">';
								echo '<h5 class="card-title">' . $username . '</h5>';
								echo '<p class="card-text" style="font-size: 0.8em;">' . $crea . "</p>";
								echo '<input type="submit" class="btn btn-primary" value="Supprimer">';
								echo '</form>';
								echo '</div>';
								echo '</div>';
							}
						} else {
							echo "Oups, une erreur c'est produite, veuillez réessayer";
						}
						mysqli_stmt_close($stmt);

						?>
					</div>
				</div>
			</div>
		</div>

		<footer id="footer">
			<ul class="copyright">
				<li>Réalisé par Matthieu Falezan, Tom Macario, Alexis Pocard et Lucien Hervé</li>
				<li>SAE 2.03</a></li>
			</ul>
		</footer>

	</div>

	<!-- Scripts -->
	<script src="../assets/js/jquery.min.js"></script>
	<script src="../assets/js/jquery.scrolly.min.js"></script>
	<script src="../assets/js/jquery.dropotron.min.js"></script>
	<script src="../assets/js/jquery.scrollex.min.js"></script>
	<script src="../assets/js/browser.min.js"></script>
	<script src="../assets/js/breakpoints.min.js"></script>
	<script src="../assets/js/util.js"></script>
	<script src="../assets/js/main.js"></script>

</body>

</html>