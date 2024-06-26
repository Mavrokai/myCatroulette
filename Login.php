<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="stylesLogin.css">
    <link rel="shortcut icon" href="./Images/MEDIA_CRUELTY-FREEKITTY_150x@2x.webp" type="Logo">


</head>

<body class="loginBody">


    <header class="titleLogin">
        <div id="loginTitle">
            <h1>My Catroulette</h1>
        </div>
    </header>
    <img src="./Images/MEDIA_CRUELTY-FREEKITTY_150x@2x.webp" alt="Logo" class="Logo">


    <div class="formu">

        <img src="./Images/LoginPicture.png" alt="chatMignon" class="catLogin">


        <form method="post" action="traitement_connexion.php" class="Formulaire">
            <div>
                <h2 class="minititleLogin">LOGIN</h2>
                <img src="./Images/MicrosoftTeams-image (3).png" alt="pelote" class="peloteLogin">
            </div>

            <br><br><br>
            <div class="input1">
                Pseudo :
                <input type="text" class="input1Box" name="Pseudo" placeholder="  Pseudo" required><br>
            </div><br>
            <div class="input2">
                Mot de Passe :
                <input type="password" class="input2Box" name="motdePasse" id="passwordField" placeholder="  Mot de Passe"
                    required> <br>
            </div>
            <input type="checkbox" class="checkbox" name="sesouvenirdeMoi"> Se souvenir de moi

            <a href="./MenuPrincipal.html">
                <button type="button" class="Google">
                    Se connecter avec google
                </button>
            </a>
            <button type="submit" class="loginButton">Se connecter</button><br>

            <a href="./inscription.php">
                <button type="button" class="inscriButton">Inscription</button><br>
            </a>
            <a href="./confi.html">
                <button type="button" class="confiButton">Confidentialité</button>
            </a>
        </form>
    </div>
</body>

</html>