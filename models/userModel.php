<?php
require_once $_SERVER["DOCUMENT_ROOT"] . "/monclub/models/database.php";


class User
{

    // pour la méthode static, pas besoin de déclarer une variable à l'inverse des contructeurs

    // methode pour s'inscrire
    public static function inscription($genre, $nom, $prenom, $email, $password)
    {

        // on appel la fonction dbConnect qui est dans la class Database
        $db = Database::dbConnect();

        // preparation de la requête
        $request = $db->prepare("INSERT INTO `user`(`genre`, `nom`, `prenom`, `email`, `mdp`) VALUES(?,?,?,?,?)");

        // exécuter la requête
        try {
            $request->execute(array($genre, $nom, $prenom, $email, $password));

            // rediriger vers la page login.php
            header("Location: http://localhost/monclub/login.php");

        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }

    // methode pour se connecter
    public static function connexion($email, $password)
    {

        // on appel la fonction dbConnect qui est dans la class Database
        $db = Database::dbConnect();

        // preparation de la requête
        $request = $db->prepare("SELECT * FROM `user` WHERE email = ?");

        // exécuter la requête
        try {
            $request->execute(array($email));

            // récupérer le résultat de la requête dans un tableau
            $user = $request->fetch(PDO::FETCH_ASSOC);
            // var_dump($user['name']);
            // die;

            // vérifier si l'email existe dans la base de donnée
            if (empty($user)) {
                $_SESSION['error_message'] = "Cet email n'existe pas";
                // rediriger vers la page précédente
                header("location:" . $_SERVER['HTTP_REFERER']);

                // vérifier si le mot de passe est correct
            } else if (password_verify($password, $user['password'])) {

                // il a taper le bon mail et le bon mot de passe
                // version avec $_COOKIE
                setcookie("id_user", $user['id_user'], time() + 86400, "/", "localhost", false, true);

                // version avec $_SESSION
                // $_SESSION["id_user"] = $user["id_user"];

                // version avec $_COOKIE
                setcookie("user_role", $user['role'], time() + 86400, "/", "localhost", false, true);

                // version avec $_SESSION
                // $_SESSION["user_role"] = $user["user_role"];

                // version avec $_COOKIE
                setcookie("user_name", $user['name'], time() + 86400, "/", "localhost", false, true);

                // rediriger vers la page list_book.php
                header("Location: http://localhost/bliblio_POO/list_book");

            } else {
                $_SESSION['error_message'] = "Mot de passe incorrect";
                // rediriger vers la page précédente
                header("location:" . $_SERVER['HTTP_REFERER']);
            }
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }

    // methode pour se déconnecter
    public static function logout()
    {

    }

    // methode pour emprunter un livre
    public static function borrow()
    {

    }

    // methode pour se désinscrire
    public static function deleteAccount()
    {

    }

}

?>
