<?php

try {
		$bdd = new PDO('mysql:host=localhost;dbname=connexion', 'root', 'root');
}

catch (PDOException $e) {
	echo "Erreur: ".$e->getMessage()."<br/>"; 
	die();
}

$regex = "((?=.*\d)(?=.*[A-Z])(?=.*[a-z])(?=.*\W).{8,})";

if (isset($_POST['pseudo']) && isset($_POST['password']) && !empty($_POST['pseudo']) && !empty($_POST['password'])) {
	if (preg_match($regex, $_POST['password'])) {
		$pseudo = strtolower(trim($_POST['pseudo']));
		$password = password_hash($_POST['password'], PASSWORD_DEFAULT);


// Insertion
		$req = $bdd->prepare('INSERT INTO membre(pseudo, password) VALUES(:pseudo, :password)');
		$req->execute(array(
		   'pseudo' => $pseudo,
		   'password' => $password));

		header("Location:dashboard.php?pseudo=$pseudo");
	}else{
		echo ("le mot de passe doit contenir au minimum une majuscule, un caractère spécial, un digit, une minuscule et au moins 8 caractères <br/> <a href='inscription.html'>Revenez en arrière</a>");
	}

} else {
			header('Location:index.html');
		}




// if (isset($_POST['email']) && isset($_POST['password']) && !empty($_POST['email']) && !empty($_POST['password'])) {
// 		$email = strtolower(trim($_POST['email']));
// 		// Hachage du mot de passe
// 		$password = trim($_POST['password']);
// 	if ($_POST['email'] == $email) {
// 		if (password_verify($password, $_POST['password')) {
// 			header("Location:dashboard.php?email=$email");
// 		} else {
// 			header('Location:index.php');
// 		}
// 	} else {
// 		header('Location:index.php');
// 	}
// }



