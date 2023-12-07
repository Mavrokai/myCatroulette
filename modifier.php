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

    $requete = "UPDATE infousers SET nom=?, pseudo=?, password=? WHERE mail=?";
    
    $stmt = mysqli_prepare($connexion, $requete);
    mysqli_stmt_bind_param($stmt, "ssss", $nom, $pseudo, $password, $mail);

    if (mysqli_stmt_execute($stmt)) {
        echo "Informations mises à jour avec succès.";
        header("Location: Login.php");
        exit();
    } else {
        echo "Erreur lors de la mise à jour : " . mysqli_error($connexion);
    }
} else {
    echo "Veuillez remplir tous les champs du formulaire.";
}

mysqli_close($connexion);
?>
