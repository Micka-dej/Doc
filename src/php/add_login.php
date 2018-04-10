


<!DOCTYPE html>

<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="../img/ViandeLogo.png">
    <link rel="stylesheet" href="../css/reset.css">
    <link rel="stylesheet" href="../css/register.css">
    <title>Breathink</title>
</head>

<body>
<div class="content">

    <form action="login.php" method="post">
        <div class="container">

            <div class="containerLeft">
                <input class="loginInput" type="text" name="nom" placeholder="Nom">
                <input class="loginInput" type="email" name="email" placeholder="Mail">
                <input class="loginInput" type="text" name="adresse" placeholder="Adresse">
                <input class="loginInput" type="text" name="ville" placeholder="Ville">
            </div>

            <div class="containerRight">
                <input class="loginInput" type="text" name="prenom" placeholder="Prénom">
                <input class="loginInput" type="password" name="password" placeholder="Votre mot de passe">
                <input class="loginInput" type="date" name="date_naissance" placeholder="date_naissance">
            </div>

        </div>
        <input class="submitInput" type="submit" name="submit" value="S'inscrire">
    </form>

</div>
</body>




