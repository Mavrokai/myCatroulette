<?php 
    session_start();

?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Sharp" rel="stylesheet">
    <link rel="stylesheet" href="vente.css">
    <link rel="shortcut icon" href="./Images/MEDIA_CRUELTY-FREEKITTY_150x@2x.webp" type="logo">
    <title>Vente</title>
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
                <a href="./vente.php" class="active">
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
                <a href="./profilParametre.php">
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

            <!-- Recent Orders Table -->
            <div class="recent-orders">
                <h2>Commandes récentes (Catdnapeur)</h2>
                <table>
                    <thead>
                        <tr>
                            <th>Nom du chat</th>
                            <th>Numéro de transaction</th>
                            <th>Prix</th>
                            <th>Paiement</th>
                            <th>Statut</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Roberto</td>
                            <td>0555244552</td>
                            <td>600€</td>
                            <td>Bitcoin</td>
                            <td>Vendu</td>
                        </tr>
                        <tr>
                            <td>Kévin</td>
                            <td>0569544552</td>
                            <td>150€</td>
                            <td>Paypal</td>
                            <td>Vendu</td>
                        </tr>
                        <tr>
                            <td>Queen</td>
                            <td>0582544552</td>
                            <td>1000€</td>
                            <td>ethereum</td>
                            <td>En cours</td>
                        </tr>
                        <tr>
                            <td>Socrate</td>
                            <td>0152544552</td>
                            <td>500€</td>
                            <td>Carte</td>
                            <td>Litige</td>
                        </tr>
                        <tr>
                            <td>Steeven</td>
                            <td>0052544552</td>
                            <td>0€</td>
                            <td>Liquide</td>
                            <td>Perdu</td>
                        </tr>
                        <tr>
                            <td>Charles</td>
                            <td>8252544552</td>
                            <td>400€</td>
                            <td>Bitcoin</td>
                            <td>Vendu</td>
                        </tr>
                        <tr>
                            <td>Roberto</td>
                            <td>7352544552</td>
                            <td>600€</td>
                            <td>Bitcoin</td>
                            <td>Annuler</td>
                        </tr>
                        <tr>
                            <td>BerBer</td>
                            <td>3652544552</td>
                            <td>650€</td>
                            <td>Carte</td>
                            <td>Vendu</td>
                        </tr>
                        <tr>
                            <td>ToTo</td>
                            <td>6252544552</td>
                            <td>800€</td>
                            <td>ethereum</td>
                            <td>Vendu</td>
                        </tr>
                        <tr>
                            <td>Max</td>
                            <td>0652544552</td>
                            <td>900€</td>
                            <td>Bitcoin</td>
                            <td>Vendu</td>
                        </tr>
                        <tr>
                            <td>Noël</td>
                            <td>9352544552</td>
                            <td>2000€</td>
                            <td>Carte</td>
                            <td>Vendu</td>
                        </tr>
                        <tr>
                            <td>Robert</td>
                            <td>6852544552</td>
                            <td>200€</td>
                            <td>ethereum</td>
                            <td>Vendu</td>
                        </tr>
                        <tr>
                            <td>Jean</td>
                            <td>2452544552</td>
                            <td>400€</td>
                            <td>Bitcoin</td>
                            <td>Vendu</td>
                        </tr>
                        <tr>
                            <td>Google</td>
                            <td>1652544552</td>
                            <td>900€</td>
                            <td>ethereum</td>
                            <td>Vendu</td>
                        </tr>
                    </tbody>
                </table>
            </div>
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
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTv3AaERP611DtvEYbGFPm9CqH1xbQhSTww1pm0UhVzoFS0pNhcmq24zEQQXBtNCjDQE8M&usqp=CAU">
                    </div>
                </div>

            </div>
            <!-- End of Nav -->

            <div class="user-profile">
                <div class="logo">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTv3AaERP611DtvEYbGFPm9CqH1xbQhSTww1pm0UhVzoFS0pNhcmq24zEQQXBtNCjDQE8M&usqp=CAU">
                    <h2><?php echo $_SESSION['Pseudo'] ?></h2>
                    <p>Catdnapeur</p>
                </div>
            </div>
        </div>

        <script src="index.js"></script>
</body>

</html>