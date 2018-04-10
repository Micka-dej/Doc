<?php
/**
 * Created by PhpStorm.
 * User: eugenieroques
 * Date: 10/04/2018
 * Time: 11:02
 */

require_once "Fonctions_php/connexion.php";



session_start();

$_SESSION['error'] = '';
if (!empty($_POST['email']) || !empty($_POST['password'])) {
    $email = htmlentities($_POST['email']);
    $password = htmlentities($_POST['password']);

//Check if input is not empty
    if (!empty($email) && !empty($password)) {
//Get mail and password from db
        $requete = "SELECT
`email`,
`password`
FROM
`Users`
WHERE
`email` = :email AND
`password` = :password
;";

        $stmt = $conn->prepare($requete);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':password', $password);
        $stmt->execute();
        $user = $stmt->fetch();

       // if ($user) {
         //   header('location: homepage.php');
        //} else {
          //  $_SESSION['error'] = 'Mauvaise combinaison';
        //}

    }
}

?>

<!DOCTYPE html>

<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="../img/">
    <link rel="stylesheet" href="../css/reset.css">
    <link rel="stylesheet" href="../css/login.css">
    <title>Breathink</title>
</head>

<body>
<div class="content">

    <div class="formContainer">

        <h1 class="title"></h1>


        <form class="" action="" method="post">
            <div class="formFlex">
                <input class="loginInput" type="email" name="email" value="" placeholder="Votre Email">
                <input class="loginInput" type="password" name="password" value="" placeholder="Votre mot de passe">
                <p class="formText">Vous n’avez pas de compte ? <strong><a class="Register" href="add_login.php">Inscrivez-vous !</a></strong></p>
                <input class="submitInput" type="submit" name="submit" value="Se Connecter">
                <p class="error" style="color: white; text-align: center;"><?=$_SESSION['error']?></p>

            </div>
        </form>




    </div>
</div>

</body>

</html>

<?php
require_once "Fonctions_php/connexion.php";

if (!empty($_POST['nom']) || !empty($_POST['password']) || !empty($_POST['prenom']) || !empty($_POST['adresse'])
    || !empty($_POST['date_naissance']) || !empty($_POST['ville']) || !empty($_POST['email'])) {

    $password = htmlentities($_POST['password']);
    $nom = htmlentities($_POST['nom']);
    $prenom = htmlentities($_POST['prenom']);
    $adresse = htmlentities($_POST['adresse']);
    $date = htmlentities($_POST['date_naissance']);
    $ville = htmlentities($_POST['ville']);
    $email = htmlentities($_POST['email']);

    $requete = "INSERT INTO `Users` (`nom`, `prenom`, `adresse`, `date_naissance`, `ville`, `email`, `password`) VALUES (:nom, :prenom, :adresse, :date_naissance, :ville, :email, :password);";

    $stmt = $conn->prepare($requete);

    $stmt->bindParam(':nom', $nom);
    $stmt->bindParam(':prenom', $prenom);
    $stmt->bindParam(':adresse', $adresse);
    $stmt->bindParam(':date_naissance', $date);
    $stmt->bindParam(':ville', $ville);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':password', $password);

    $stmt->execute();
}
?>







