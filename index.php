<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>dashboard</title>
    <link rel="stylesheet" href="css/all.min.css">
    <script src="js/all.min.js"></script>
    <?php
    include("inc/indexcss.php");
    ?>

</head>
<body>
    <div class="dashboad-container">
        <div class="main-sidebar">
            <div class="aside-header">
                <h1 class="main-title">Dashboard</h1>
                <div class="close" id="closeSidebar">
                    <span><i class="fa fa-close" aria-hidden="true"></i></span>
                </div>
            </div>
            
            <div class="sidebar">
                <ul class="list-items">
                    <li class="item">
                        <a href="#">
                            <span><i class="fa-solid fa-house"></i></span>
                            <span>Acccueil</span>
                        </a>
                    </li>  
                    <li class="item">
                        <a href="#">
                            <span><i class="fa fa-user" aria-hidden="true"></i></span>
                            <span>Mon profil</span>
                        </a>
                    </li> 


                    <li class="item">
                        <a href="statistique.php">
                            <span><i class="fa fa-dashboard" aria-hidden="true" id="icon"></i></span>
                            <span>Mes statistiques</span>
                        </a>
                    </li> 
                    <li class="item">
                        <a href="#"class="active">
                            <span><i class="fa-regular fa-envelope"></i></span>
                            <span>Notifications</span>
                            <span class="message-count">22</span>
                        </a>
                    </li> 
                    <li class="item">
                        <a href="#">
                            <span><i class="fa-regular fa-clipboard"></i></span>
                            <span>Liste des clients</span>
                        </a>
                    </li> 
                     <li class="item">
                        <a href="#">
                            <span><i class="fa-regular fa-comment"></i></span>
                            <span>Historique des interactions</span>
                        </a>
                    </li> 
                    <li class="item">
                        <a href="#">
                            <span><i class="fa-solid fa-coins"></i></span>
                            <span>Rapport finacier</span>
                        </a>
                    </li> 
                    <li class="item">
                        <a href="#">
                            <span><i class="fa-solid fa-calendar"></i></span>
                            <span>Calendrier</span>
                        </a>
                    </li> 
                    <li class="item">
                        <a href="#">
                            <span><i class="fa-solid fa-question"></i></span>
                            <span>Guide ou FAQ</span>
                        </a>
                    </li> 
                    

                     <li class="item">
                        <a href="#">
                            <span><i class="fa-solid fa-right-from-bracket" id="icon"></i></span>
                            <span>Deconnexion</span>
                        </a>
                    </li>


                </ul>
            </div>
        </div>
        <div class="main-container">
            <div class="insights">
                <div class="card">
                    <div class="card-container">
                        <div class="card-header">
                            <span><i class="fa fa-line-chart" aria-hidden="true"></i></span>

                        </div>
                        <div class="card-body">
                            <div class="card-info">
                                <h3>Demandes acceptees</h3>
                                <h1>2.03M</h1>
                            </div>
                            <div class="card-progress">
                                <svg width="90" height="90"class="stroke-yellow">
                                    <circle id="circle1" cx="38" cy="38" r="36"></circle>
                                </svg>
                                <div class="percentage">
                                    <p>17%</p>
                                </div>
                                
                            </div>
                        </div>
                        <div class="card-footer">
                            <small>sur les 48h precedentes</small>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-container">
                        <div class="card-header">
                            <span><i class="fa fa-line-chart" aria-hidden="true"></i></span>

                        </div>
                        <div class="card-body">
                            <div class="card-info">
                                <h3>Satisfaction des clients</h3>
                                <h1>2.03M</h1>
                            </div>
                            <div class="card-progress">
                                <svg width="90" height="90"class="stroke-fuscha">
                                    <circle id="circle2" cx="38" cy="38" r="36"></circle>
                                </svg>
                                <div class="percentage">
                                    <p>70%</p>
                                </div>
                                
                            </div>
                        </div>
                        <div class="card-footer">
                            <small>sur les 48h precedentes</small>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-container">
                        <div class="card-header">
                            <span><i class="fa fa-line-chart" aria-hidden="true"></i></span>
                        </div>
                        <div class="card-body">
                            <div class="card-info">
                                <h3>Revenu genere</h3>
                                <h1>2.03M</h1>
                            </div>
                            <div class="card-progress">
                                <svg width="90" height="90" class="stroke-cyan">
                                    <circle id="circle3" cx="38" cy="38" r="36"></circle>
                                </svg>
                                <div class="percentage">
                                    <p>48%</p>
                                </div>
                                
                            </div>
                        </div>
                        <div class="card-footer">
                            <small>sur les 48h precedentes</small>
                        </div>
                    </div>
                </div>
            </div>
            <section class="recent-orders">
                <div class="ro-title">
                    <h2 class="recent-orders-tiltle">Demandes recentes</h2>
                    <a href="#" class="show all">Tout afficher</a>
                </div>
                <table>
                    <thead>
                        <tr>
                            <th>STRUCTURE</th>
                            <th>SECTEUR D'ACTIVITE</th>
                            <th>SALAIRE</th>
                            <th>DATE DE PUBLICAITION</th>
                            <th>ACTIONS</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Mme kessel</td>
                            <td>Menagere</td>
                            <td>50.000fcfa</td>
                            <td>maintenant</td>
                            <td class="action-buttons">
                             <button onclick="applyForService(this)">Postuler</button>
                             <button onclick="declineRequest(this)">Refuser</button>
                          </td>
                        </tr>
                        <tr>
                            <td>KIM COMPANY</td>
                            <td>Receptionniste</td>
                            <td>60.000fcfa negociable</td>
                            <td>il ya 3min</td>
                            <td class="action-buttons">
                             <button onclick="applyForService(this)">Postuler</button>
                            <button onclick="declineRequest(this)">Refuser</button>
                           </td>
                        </tr>
                        <tr>
                            <td>KMC</td>
                            <td>Techniciens de surface</td>
                            <td>70.000FCFA</td>
                            <td>il ya 1h</td>
                            <td class="action-buttons">
                            <button onclick="applyForService(this)">Postuler</button>
                            <button onclick="declineRequest(this)">Refuser</button>
                            </td>
                        </tr>
                        <tr>
                            <td>Msr germain</td>
                            <td>Plombier</td>
                            <td>80.000fcfa</td>
                            <td>il ya 2h</td>
                            <td class="action-buttons">
                            <button onclick="applyForService(this)">Postuler</button>
                            <button onclick="declineRequest(this)">Refuser</button>
                           </td>
                        </tr>
                        <tr>
                            <td>SONEOPAD YASSA</td>
                            <td>MAGASINIER</td>
                            <td>70.000fcfa</td>
                            <td>il ya 24h</td>
                            <td class="action-buttons">
                              <button onclick="applyForService(this)">Postuler</button>
                              <button onclick="declineRequest(this)">Refuser</button>
                          </td>
                        </tr>
                        

                    </tbody>
                </table>
            </section>
        </div>

        <div class="extrabar">
            <header class="header-right">
                <button class="toggle-menu-btn" id="openSidebar">
                   <span> <i class="fa fa-bars" aria-hidden="true"></i></span>
                    
    
                </button>
                <div class="toggle-theme">
                    <span class="light active"><i class="fa-solid fa-lightbulb"></i></span>
                    <span><i class="fa-solid fa-moon"></i></span>
                </div>
                <div class="profile">
                    <div class="profile-info">
                        <p>Salut,<strong>white</strong></p>
                        <small>Admin</small>
                    </div>
                    <div class="profile-image">
                        <img src="images/imag.jpg" alt="" width="100%"/>
                    </div>
                </div>
            </header>
            <div class="recent-updates">
                <h2>Annonces recentes</h2>
                <div class="updates-container">
                    <div class="update">
                        <div class="profile-image">
                            <img src="images/imag.jpg" alt="" width="100%"/>
                        </div>
                        <div class="message">
                            <p>
                                <strong>blanche</strong> white services is so cute
                            </p>
                        </div>
                    </div>
                    <div class="update">
                        <div class="profile-image">
                            <img src="images/imag.jpg" alt="" width="100%"/>
                        </div>
                        <div class="message">
                            <p>
                                <strong>blanche</strong> white service is so cute
                            </p>
                        </div>
                    </div>
                    <div class="update">
                        <div class="profile-image">
                            <img src="images/imag.jpg" alt="" width="100%"/>
                        </div>
                        <div class="message">
                            <p>
                                <strong>blanche</strong> white service is so cute
                            </p>
                        </div>
                    </div>
                    
                </div>
            </div>
            <div class="analytics">
                <h2>ServiceLink</h2>
            
             <div class="order">
                <div class="order-icon">
                    <i class="fa fa-shopping-basket" aria-hidden="true"></i>
                </div>
                <div class="order-details">
                    <div class="info">
                        <h3>COMMANDE DIRECTE</h3>
                        <small>48h precedentes</small>
                    </div>
                    <h4 class="precent-evo text-cyan">+18%</h4>
                </div>
              </div>
              <div class="order">
                <div class="order-icon">
                    <i class="fa fa-shopping-basket" aria-hidden="true"></i>
                </div>
                <div class="order-details">
                    <div class="info">
                        <h3>COMMANDE DIRECTE</h3>
                        <small>48h precedentes</small>
                    </div>
                    <h4 class="precent-evo text-fuscha">+18%</h4>
                </div>
              </div>
              <div class="order">
                <div class="order-icon">
                    <i class="fa fa-shopping-basket" aria-hidden="true"></i>
                </div>
                <div class="order-details">
                    <div class="info">
                        <h3>COMMANDE DIRECTE</h3>
                        <small>48h precedentes</small>
                    </div>
                    <h4 class="precent-evo text-yellow">+18%</h4>
                </div>
              </div>
              <button class="new-product">
                 <i class="fa fa-plus" aria-hidden="true"></i>
                 <h3>Nouveau produits</h3>
              </button>
            </div>
        </div>
    </div>



    <script src="js/index.js"></script>
    <script>
    function applyForService(button) {
        alert("Veuillez ajouter votre CV pour postuler.");
    }

    function declineRequest(button) {
        const row = button.closest('tr');
        if (confirm("Êtes-vous sûr de vouloir refuser cette demande ?")) {
            row.remove();
        }
    }
</script>
    
    
</body>
</html>