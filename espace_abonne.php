<!DOCTYPE html>
	<html lang="fr">
		<head>
			<meta charset="utf-8"/>
			<meta name="viewport" content="width=device-width, initial-scale=1.0">
			<link href='https://fonts.googleapis.com/css?family=Maitree' rel='stylesheet'>
			<link rel="stylesheet" href="style2.css" />
			<title>Espace Abonné</title>
		</head>

		<body>
			<header>
				<div class="button">
					<a href="logout.php">Déconnexion</a>
				</div>
			</header>

			<h2>Bienvenue dans votre espace abonné !</h2>

			<div id="img">
				<img src="image/utilisateur.png" alt="user image">
			</div>

			<div id="bienvenue">
				<p>Salut <span> <?php echo $_GET['pseudo']; ?> </span></p>
				<p>N'oublies pas de te déconnecter :)</p>
			</div>
		</body>
	</html>