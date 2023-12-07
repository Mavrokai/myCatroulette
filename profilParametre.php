<?php 
    session_start();

?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Sharp" rel="stylesheet">
    <link rel="stylesheet" href="profilParametre.css">
    <link rel="shortcut icon" href="./Images/MEDIA_CRUELTY-FREEKITTY_150x@2x.webp" type="logo">
    <title>Paramètre</title>
</head>

<body>

    <div class="container">
        <!-- Sidebar Section -->
        <aside>
            <div class="toggle">
                <div class="logo">
                    <h2>My<span class="danger">Catroulette</span></h2>
                </div>
                <div class="close" id="close-btn">
                    <span class="material-icons-sharp">
                        close
                    </span>
                </div>
            </div>

            <div class="sidebar">
                <a href="#">
                    <span class="material-icons-sharp">
                        dashboard
                    </span>
                    <h3>Centre de contrôle</h3>
                </a>
                <a href="profil.html">
                    <span class="material-icons-sharp">
                        person_outline
                    </span>
                    <h3>Profil</h3>
                </a>
                <a href="#">
                    <span class="material-icons-sharp">
                        receipt_long
                    </span>
                    <h3>Historique</h3>
                </a>
                <a href="./admin.php">
                    <span class="material-icons-sharp">
                        insights
                    </span>
                    <h3>Analytique</h3>
                </a>
                <a href="#">
                    <span class="material-icons-sharp">
                        mail_outline
                    </span>
                    <h3>Tickets</h3>
                    <span class="message-count">27</span>
                </a>
                <a href="./vente.php">
                    <span class="material-icons-sharp">
                        inventory
                    </span>
                    <h3>Liste de vente</h3>
                </a>
                <a href="#">
                    <span class="material-icons-sharp">
                        report_gmailerrorred
                    </span>
                    <h3>Plaintes</h3>
                </a>
                <a href="./profilParametre.php" class="active">
                    <span class="material-icons-sharp">
                        settings
                    </span>
                    <h3>Paramètre</h3>
                </a>
                <a href="#">
                    <span class="material-icons-sharp">
                        add
                    </span>
                    <h3>Nouvelle conexion</h3>
                </a>
                <a href="./Login.php">
                    <span class="material-icons-sharp">
                        logout
                    </span>
                    <h3>Déconexion</h3>
                </a>
            </div>
        </aside>
        <!-- End of Sidebar Section -->

        <!-- Main Content -->
        <main>
            <div class="new-users">
                <h1>Paramètre</h1>
                <div class="main">

                    <Div class="Userphoto">
                        Votre image de profil
                        <div class="userProfil">
                            
                            <input type="file" method="get" name="avatar" id="imageUpload" accept="image/*">
                            <img src="#" id="preview" width="200" height="200">
                            <button onclick="uploadImage()" id="Upload">Enregistrer</button>
                        
                        </div>
                    </div><br>
                    <div class="ligne"></div>

                    <div>
                        <form method="post" action="./modifier.php" class="formR">
                            

                            <div class="NomC">
                                Nom complet <br>
                                <input type="text" name="nom" id="nomComplet"
                                    placeholder="  Veuillez saisir votre nom complet">
                            </div><br>
                            <div class="NomC">
                                Nom d'utilisateur <br> <input type="text" name="pseudo" id="nameUsers"
                                    placeholder="  Veuillez saisir votre nom d'utilisateur">
                            </div><br>
                            <div class="NomC">
                                Email <br> <input type="email" name="mail" id="email"
                                    placeholder="  Veuillez saisir votre adresse électronique">
                            </div><br>
                            <div class="password">
                                Mot de passe <br> <input type="password" name="password" id="password" placeholder="Modifier votre mot de passe">
                            </div><br>
                            <div class="NomC">
                                Numéro de téléphone <br> <input type="number" name="numTel" id="numTel"
                                    placeholder="  Veuillez saisir votre numéro de téléphone">
                            </div> <br>
                            <div class="NomC">
                                Bio <br> <input type="text" name="bio" id="Bio"
                                    placeholder="  Écrivez ici votre biographie, par exemple vos loisirs, vos intérêts, etc.">
                            </div><br> <br>
                            <button type="submit" class="MJ">Mise à jour du profil</button> <button type="reset"
                                class="MR">Reset</button>
                        </form>
                    </div>
                </div>
                <!-- End of New Users Section -->


                <!-- End of Recent Orders -->

        </main>
        <!-- End of Main Content -->

        <!-- Right Section -->
        <div class="right-section">
            <div class="nav">
                <button id="menu-btn">
                    <span class="material-icons-sharp">
                        menu
                    </span>
                </button>
                <div class="dark-mode">
                    <span class="material-icons-sharp active">
                        light_mode
                    </span>
                    <span class="material-icons-sharp">
                        dark_mode
                    </span>
                </div>

                <div class="profile">
                    <div class="info">
                        <p>Salut !, <b><?php echo $_SESSION['Pseudo'] ?></b></p>
                        <small class="text-muted">Admin</small>
                    </div>
                    <div class="profile-photo">
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS8WeZJIrUIldLDe9xtV8lPczpA8m14iY8gyw&usqp=CAUµ">
                    </div>
                </div>

            </div>
            <!-- End of Nav -->

            <div class="user-profile">
                <div class="logo">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS8WeZJIrUIldLDe9xtV8lPczpA8m14iY8gyw&usqp=CAU" alt="" srcset="">
                    <h2><?php echo $_SESSION['Pseudo'] ?></h2>
                    <p>Catdnapeur</p>
                </div>
            </div>


        </div>


    </div>

    <script src="index.js"></script>
</body>

</html>