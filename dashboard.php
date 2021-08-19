<!DOCTYPE html>
	<html lang="fr">
		<head>
			<meta charset="utf-8" />
			<meta name="viewport" content="width=device-width, initial-scale=1.0">
			<link href='https://fonts.googleapis.com/css?family=Maitree' rel='stylesheet'>
			<link rel="stylesheet" href="style2.css" />
			<title>Espace Utilisateur</title>
		</head>

		<body>
			<header>
				<div class="button">
					<a href="index.html">Connexion</a>
				</div>
			</header>

			<h2>Bienvenue parmis nous !</h2>

			<div id="img">
				<img src="image/utilisateur.png" alt="user image">
			</div>

			<div id="bienvenue">
				<p>Salut <span><?php echo $_GET['pseudo']; ?> </span></p>
				<p>Connectes toi pour accéder à ton espace utilisateur :)</p>
			</div>

		</body>
	</html>