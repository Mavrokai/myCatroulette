<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription</title>
    <link rel="stylesheet" href="inscription.css">
    <link rel="shortcut icon" href="./Images/MEDIA_CRUELTY-FREEKITTY_150x@2x.webp" type="image/x-icon">

    <link rel="shortcut icon" href="./Images/MEDIA_CRUELTY-FREEKITTY_150x@2x.webp" type="Logo">
</head>

<body>
    <header>
        <img src="./Images/MEDIA_CRUELTY-FREEKITTY_150x@2x.webp" alt="Logo" class="Logo">
        <p class="MyCatRoulette">
        <h1>My Catroulette</h1>
        </p>
    </header>
    <form method='post' action="./traitement_inscription.php">
        <a href="./Login.php">
            <img src="./Images/retour-removebg-preview.png" alt="retour" class="Retour">
        </a>
        <div class="frame">
            <p class="lastName">
                Votre Nom: <br> <input type="text" name="LastName" class="LastName" placeholder="Nom" required>
            </p>
            <p class="firstName">
                Votre Prénom: <br> <input type="text" name="FirstName" class="FirstName" placeholder="Prénom" required>
            </p>
            <p class="mail">
                Votre Adresse Mail: <br> <input type="email" name="Mail" id="Mail" placeholder="Adresse Mail" required>
            </p>
            <p class="pseudo">
                Votre Pseudo: <br> <input type="text" name="Pseudo" id="Pseudo" placeholder="Pseudo" required>
            </p>
            <p class="password">
                Votre Mot De Passe: <br> <input type="password" name="password" id="psw" placeholder="  ********"
                    pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"
                    title="Votre mot de passe doit contenir minimum 8 caractères, une lettre minuscule, une lettre majuscule, un chiffre"
                    required>
            </p>
            <input type="submit" value="valider" id="submit">
        </div>
        <div id="message">
            <div class="condition">
                <h3>Votre <b>Mot de Passe</b> doit contenir :</h3>
                <p id="letter" class="invalid"> une lettre <b>Minuscule</b></p>
                <p id="capital" class="invalid"> une lettre <b>Majuscule</b></p>
                <p id="number" class="invalid"> un <b>Nombre</b></p>
                <p id="length" class="invalid">Minimum <b>8 characters</b></p>
            </div>
        </div>
    </form>
</body>

</html>