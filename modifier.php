<?php
$server = "localhost";
$user = "root";
$password = "";
$dbname = "mycatroulette";

$connexion = mysqli_connect($server, $user, $password, $dbname);

if (!$connexion) {
    die("La connexion a échoué : " . mysqli_connect_error());
}

if(isset($_POST['nom']) && isset($_POST['mail']) && isset($_POST['pseudo']) && isset($_POST['password'])) {
    $nom = $_POST['nom'];
    $mail = $_POST['mail'];
    $pseudo = $_POST['pseudo'];
    $password = $_POST['password'];

    $requete = "UPDATE infousers SET nom='$nom', pseudo='$pseudo', password='$password' WHERE mail='$mail'";

    if (mysqli_query($connexion, $requete)) {
        echo "Informations mises à jour avec succès.";
        
        header("Location: MenuPrincipal.html");
        exit();
    } else {
        echo "Erreur lors de la mise à jour : " . mysqli_error($connexion);
    }
} else {
    echo "Veuillez remplir tous les champs du formulaire.";
}

mysqli_close($connexion);
?>
