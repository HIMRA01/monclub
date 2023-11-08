
<?php


session_start();
require_once "../../models/userModel.php";


if (isset($_POST['inscription'])) {
    $genre = htmlspecialchars($_POST['genre']);
    $nom = htmlspecialchars($_POST['nom']);
    $prenom = htmlspecialchars($_POST['prenom']);

    $email = htmlspecialchars($_POST['email']);
    $password = htmlspecialchars($_POST['mdp']);

    // hasher le pot de passe
    $passwordHash = password_hash($password, PASSWORD_DEFAULT);

    // apeler la methode inscription de la classe User
    User::inscription( $genre,$nom, $prenom, $email, $password);
    // cette syntaxe uniquement pour appeler les méthodes static.
    // la méthode inscription étant static donc on utilise le nom de la classe suivi de "::" ensuite le nom de la méthode qui est inscriptions.
}