<?php        
session_start();  
//session_destroy sert à detruire la session  
session_destroy();  
// echo" Vous êtes  déconnecté";    
?> 

<!DOCTYPE html>
	<html lang="fr">
		<head>
			<meta charset="utf-8"/>
			<meta name="viewport" content="width=device-width, initial-scale=1.0">
			<link href='https://fonts.googleapis.com/css?family=Maitree' rel='stylesheet'>
			<link rel="stylesheet" href="style2.css" />
			<title>Déconnexion</title>
		</head>

		<body>
			<h2>Vous êtes déconnecté(e)</h2>

			<div id="img">
				<img src="image/deconnexion.jpeg" alt="user image">
			</div>

			<div id="deconnexion">
				<p>Aurevoir et à bientôt</p>
			</div>

		</body>
	</html>