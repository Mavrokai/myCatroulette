<?php
    session_start();

?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Sharp" rel="stylesheet">
    <link rel="stylesheet" href="admin.css">
    <link rel="shortcut icon" href="./Images/MEDIA_CRUELTY-FREEKITTY_150x@2x.webp" type="logo">
    <title>Panel Admin</title>
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
                <a href="#" class="active">
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
            <h1>Analytique</h1>
            <!-- Analyses -->
            <div class="analyse">
                <div class="sales">
                    <div class="status">
                        <div class="info">
                            <h3>Ventes totales/J</h3>
                            <h1>65,024€</h1>
                        </div>
                        <div class="progresss">
                            <svg>
                                <circle cx="38" cy="38" r="36"></circle>
                            </svg>
                            <div class="percentage">
                                <p>+81%</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="visits">
                    <div class="status">
                        <div class="info">
                            <h3>Visite du site/J</h3>
                            <h1>24,981</h1>
                        </div>
                        <div class="progresss">
                            <svg>
                                <circle cx="38" cy="38" r="36"></circle>
                            </svg>
                            <div class="percentage">
                                <p>-48%</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="searches">
                    <div class="status">
                        <div class="info">
                            <h3>Recherches</h3>
                            <h1>14,147</h1>
                        </div>
                        <div class="progresss">
                            <svg>
                                <circle cx="38" cy="38" r="36"></circle>
                            </svg>
                            <div class="percentage">
                                <p>+21%</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End of Analyses -->

            <!-- New Users Section -->
            <div class="new-users">
                <h2>Nouveaux utilisateurs</h2>
                <div class="user-list">
                    <div class="user">
                        <img src="Images/ap1.jpg">
                        <h2>Jack</h2>
                        <p>Il y a 54 minutes</p>
                    </div>
                    <div class="user">
                        <img src="Images/ap2.jpg">
                        <h2>Amir</h2>
                        <p>Il y a 3 heures</p>
                    </div>
                    <div class="user">
                        <img src="Images/ap3.jpg">
                        <h2>Ember</h2>
                        <p>Il y a 6 heures</p>
                    </div>
                    <div class="user">
                        <img src="./Images/ap4.jpg">
                        <h2>More</h2>
                        <p>Il y a 8 heures</p>
                    </div>
                </div>
            </div>
            <!-- End of New Users Section -->

            <!-- Recent Orders Table -->
            <div class="recent-orders">
                <h2>Commandes récentes (Catdnapeur)</h2>
                <table>
                    <thead>
                        <tr>
                            <th>Nom du chat</th>
                            <th>Numéro de transaction</th>
                            <th>Paiement</th>
                            <th>Statut</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Roberto</td>
                            <td>0552544552</td>
                            <td>600€</td>
                            <td>Vendu</td>
                        </tr>
                        <tr>
                            <td>Magi</td>
                            <td>0661544558</td>
                            <td>800€</td>
                            <td>En cours</td>
                        </tr>
                        <tr>
                            <td>Kévin</td>
                            <td>2552544552</td>
                            <td>200€</td>
                            <td>Litige</td>
                        </tr>
                        <tr>
                            <td>King</td>
                            <td>1061544558</td>
                            <td>1500€</td>
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

            <div class="reminders">
                <div class="header">
                    <h2>Rappels</h2>
                    <span class="material-icons-sharp">
                        notifications_none
                    </span>
                </div>

                <div class="notification">
                    <div class="icon">
                        <span class="material-icons-sharp">
                            volume_up
                        </span>
                    </div>
                    <div class="content">
                        <div class="info">
                            <h3>Atelier</h3>
                            <small class="text_muted">
                                08:00 AM - 12:00 PM
                            </small>
                        </div>
                        <span class="material-icons-sharp">
                            more_vert
                        </span>
                    </div>
                </div>

                <div class="notification deactive">
                    <div class="icon">
                        <span class="material-icons-sharp">
                            edit
                        </span>
                    </div>
                    <div class="content">
                        <div class="info">
                            <h3>Kidnappé des chats</h3>
                            <small class="text_muted">
                                12:00 - 17:00
                            </small>
                        </div>
                        <span class="material-icons-sharp">
                            more_vert
                        </span>
                    </div>
                </div>

                <div class="notification add-reminder">
                    <div>
                        <span class="material-icons-sharp">
                            add
                        </span>
                        <h3>Ajouter un rappel</h3>
                    </div>
                </div>

            </div>

        </div>


    </div>

    <script src="index.js"></script>
</body>

</html>