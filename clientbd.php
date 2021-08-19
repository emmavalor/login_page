<?php
error_reporting(E_ALL);

try {
		$bdd = new PDO('mysql:host=localhost;dbname=id17446312_connexion', 'id17446312_emmavalor', 'J5-[_Uw+_$gFC4-P');
}

catch (PDOException $e) {
	echo "Erreur: ".$e->getMessage()."<br/>"; 
	die();
}

//  Récupération de l'utilisateur et de son password hashé
$pseudo = $_POST['pseudo'];
$pseudoClient = $_POST['pseudo'];

$req = $bdd->prepare("SELECT pseudo, password FROM membre WHERE pseudo = '$pseudoClient'");
$req->execute(array(
    'pseudo' => $pseudo));
$resultat = $req->fetch();

// Comparaison du pass envoyé via le formulaire avec la base
$isPasswordCorrect = password_verify($_POST['password'], $resultat['password']);


if (!$resultat)
{

    echo 'Mauvais identifiant ou mot de passe ! <br/>';
    echo "<a href=\"index.html\">Retourner à la page de connexion</a>";
}
else
{
    if ($isPasswordCorrect) {
        session_start();
        $_SESSION['pseudo'] = $pseudo;
        header("Location:espace_abonne.php?pseudo=$pseudo");
    }
    else {
        echo 'Mauvais identifiant ou mot de passe ! <br/>';
        echo "<a href=\"index.html\">Retourner à la page de connexion</a>";
    }
}
