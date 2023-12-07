<?php 
    session_start();
    $server = "localhost";
    $user = "root";
    $password = "";
    $dbname = "mycatroulette";

    $conn = new mysqli($server, $user, $password, $dbname);
    if ($conn->connect_error) {
        die("Echec de la connexion : " .$conn->connect_error);
    }

    $nom = $_POST['LastName'];
    $prenom = $_POST['FirstName'];
    $mail = $_POST['Mail'];
    $pseudo = $_POST['Pseudo'];
    $password = $_POST['password'];
    $avatar = $_POST['avatar'];
    

    $sql = $conn->prepare("INSERT INTO infousers (nom, prenom, mail, pseudo, password, avatar)VALUES (?, ?, ?, ?, ?, ?)");
    $sql->bind_param("ssssss", $nom, $prenom, $mail, $pseudo, $password, $avatar);

    if($sql->execute()) {
        header("Location:Login.php"); 
    } else {
        echo "Erreur lors de votre inscription : " .$conn->error;
    }

    $conn->close();
?> 