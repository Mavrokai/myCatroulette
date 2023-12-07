<?php 
    session_start();

    $server = "localhost";
    $user = "root";
    $password = "";
    $dbname = "mycatroulette";
    
    $conn = new mysqli($server, $user, $password, $dbname);
    
    if ($conn->connect_error) {
        die("Echec de la connexion : " . $conn->connect_error);
    }
    
    $pseudo = $_POST['Pseudo'];
    $password = $_POST['motdePasse'];
    
    $sql = $conn->prepare("SELECT * FROM infousers WHERE pseudo = ? AND password = ?");
    $sql->bind_param("ss", $pseudo, $password);
    $sql->execute();
    $result = $sql->get_result();
    
    if ($result->num_rows > 0) {
        $_SESSION['Pseudo'] = $pseudo;
        echo "Connexion réussie. Bienvenue, " . $pseudo;

        header("Location:MenuPrincipal.html");
    } else {
        echo "Identifiants incorrects. Veuillez réessayer.";
    }
    
    $conn->close();

?>