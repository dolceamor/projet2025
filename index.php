<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>dashboard</title>
    <link rel="stylesheet" href="css/all.min.css">
    <script src="js/all.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
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
                                <h3>Services offerts</h3>
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
                                <h3>Avis des clients</h3>
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
                    <tbody id="jobTable">
                       <tr>
                          <td>Mme Kessel</td>
                          <td>Ménagère</td>
                          <td>50.000 FCFA</td>
                          <td>maintenant</td>
                         <td class="action-buttons">
                         <button onclick="openModal(this)">Postuler</button>
                         <button onclick="deleteRow(this)">Refuser</button>
                         </td>
                       </tr>
                        <tr>
                            <td>KIM COMPANY</td>
                            <td>Receptionniste</td>
                            <td>60.000fcfa negociable</td>
                            <td>il ya 3min</td>
                            <td class="action-buttons">
                              <button onclick="openModal(this)">Postuler</button>
                              <button onclick="deleteRow(this)">Refuser</button>
                          </td>
                        </tr>
                          
                        <tr>
                            <td>KMC</td>
                            <td>Techniciens de surface</td>
                            <td>70.000FCFA</td>
                            <td>il ya 1h</td>
                            <td class="action-buttons">
                              <button onclick="openModal(this)">Postuler</button>
                              <button onclick="deleteRow(this)">Refuser</button>
                          </td>
                        </tr>
                        <tr>
                            <td>Msr germain</td>
                            <td>Plombier</td>
                            <td>80.000fcfa</td>
                            <td>il ya 2h</td>
                            <td class="action-buttons">
                              <button onclick="openModal(this)">Postuler</button>
                              <button onclick="deleteRow(this)">Refuser</button>
                          </td>
                        </tr>
                        <tr>
                            <td>SONEOPAD YASSA</td>
                            <td>MAGASINIER</td>
                            <td>70.000fcfa</td>
                            <td>il ya 24h</td>
                            <td class="action-buttons">
                              <button onclick="openModal(this)">Postuler</button>
                              <button onclick="deleteRow(this)">Refuser</button>
                          </td>
                        </tr>
                        

                    </tbody>
                </table>
                <div id="myModal" class="modal">
                   <div class="modal-content">
                     <span onclick="closeModal()" style="cursor:pointer;">&times;</span>
                    <h2>Ajouter votre CV</h2>
                   <form id="cvForm" action="send_cv.php" method="POST" enctype="multipart/form-data">
                   <input type="file" name="cv" id="cvInput" accept=".pdf,.doc,.docx" required>
                   <input type="hidden" name="structure" id="structureInput">
                  <button type="submit">Soumettre</button>
                  </form>
                 </div>
             </div>
            </section>
            <div class="chart-container">
              <h2>Évolution des Services, Demandes et Revenus</h2>
              <canvas id="myChart"></canvas>
            </div>
            
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
                <h2>Commentaires</h2>
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

</body>

    <script>
    const body = document.body;
const openSidebar = document.querySelector('#openSidebar');
const closeSidebar = document.querySelector('#closeSidebar');
const toggleTheme = document.querySelector('.toggle-theme');
const sidebar = document.querySelector('.main-sidebar');
const light = toggleTheme.children[0];
const dark = toggleTheme.children[1];
const percentage = document.querySelectorAll('.percentage p');

// Ouvrir la barre latérale
openSidebar.addEventListener('click', () => {
    sidebar.style.left = '0%'; 
});

// Fermer la barre latérale
closeSidebar.addEventListener('click', () => {
    sidebar.style.left = '-100%'; 
});

// Changer le thème
toggleTheme.addEventListener('click', changeTheme);

// Fonction pour changer le thème
function changeTheme() {
    if (body.classList.contains('dark-mode')) {
        lightMode();
    } else {
        darkMode();
    }
}

// Vérifier les préférences de couleur du système
if (window.matchMedia && window.matchMedia('(prefers-color-scheme: dark)').matches) {
    darkMode();
}

// Fonction pour le mode clair
function lightMode() {
    body.classList.remove('dark-mode');
    light.classList.add('active');
    dark.classList.remove('active');
}

// Fonction pour le mode sombre
function darkMode() {
    body.classList.add('dark-mode');
    light.classList.remove('active');
    dark.classList.add('active');
}

// Animer les cercles de pourcentage
percentage.forEach((e, i) => {
    let val = parseInt(e.textContent);
    let circle = document.getElementById(`circle${i + 1}`);
    let r = circle.getAttribute('r');
    let circ = Math.PI * 2 * r;
    let fillValue = (circ * (100 - val)) / 100;
    let counter = 0;

    // Stocker l'ID de l'intervalle pour pouvoir l'arrêter plus tard
    let interval = setInterval(() => {
        if (counter === val) {
            clearInterval(interval); // Utiliser l'ID de l'intervalle pour le stopper
        } else {
            counter += 1;
            e.innerText = counter + '%';
            circle.style.strokeDashoffset = fillValue;
        }
    }, 1000 / val);
});

function lightMode() {
    body.classList.remove('dark-mode');
    light.classList.add('active');
    dark.classList.remove('active');
}

function darkMode() {
    body.classList.add('dark-mode');
    light.classList.remove('active');
    dark.classList.add('active');
}

    percentage.forEach((e, i) => {
        let val = parseInt(e.textContent);
        let circle = document.getElementById(`circle${i + 1}`);
        let r = circle.getAttribute('r');
        let circ = Math.PI * 2 * r;
        let fillValue = (circ * (100 - val)) / 100;
        let counter = 0;
    
        // Stocker l'ID de l'intervalle pour pouvoir l'arrêter plus tard
        let interval = setInterval(() => {
            if (counter === val) {
                clearInterval(interval); // Utiliser l'ID de l'intervalle pour le stopper
            } else {
                counter += 1;
                e.innerText = counter + '%';
                circle.style.strokeDashoffset = fillValue;
            }
        }, 1000 / val);
    });
    
   
    

</script>
<script>
        let currentRow;

        function openModal(button) {
            currentRow = button.closest('tr');
            document.getElementById("myModal").style.display = "block";
        }

        function closeModal() {
            document.getElementById("myModal").style.display = "none";
        }

        function submitCV() {
            const cvInput = document.getElementById("cvInput");
            const file = cvInput.files[0];

            if (file) {
                // Ici, vous devriez envoyer le fichier par email via un backend
                alert("Votre CV a été soumis: " + file.name);
                closeModal();
            } else {
                alert("Veuillez sélectionner un fichier.");
            }
        }
        function openModal(button) {
    currentRow = button.closest('tr');
    const structure = currentRow.cells[0].innerText; // Récupérer le nom de la structure
    document.getElementById("structureInput").value = structure; // Mettre à jour le champ caché
    document.getElementById("myModal").style.display = "block";
}


        function deleteRow(button) {
            const row = button.closest('tr');
            row.parentNode.removeChild(row);
        }
    </script>

<script>
    const ctx = document.getElementById('myChart').getContext('2d');
    const myChart = new Chart(ctx, {
        type: 'line', // Type de graphique
        data: {
            labels: ['Jan', 'Fév', 'Mar', 'Avr', 'Mai', 'Juin', 'Juil','aout','septembre','octobre','novembre','decembre'], // Étiquettes des mois
            datasets: [
                {
                    label: 'Services Offerts',
                    data: [10, 12, 15, 18, 20, 22, 30,42,45,48,50,54], // Données pour les services
                    borderColor: 'rgba(75, 192, 192, 1)',
                    backgroundColor: 'rgba(75, 192, 192, 0.2)',
                    borderWidth: 2,
                    fill: true,
                },
                {
                    label: 'Demandes Reçues',
                    data: [5, 8, 12, 14, 18, 20, 23,28,,30,40], // Données pour les demandes
                    borderColor: 'rgba(255, 99, 132, 1)',
                    backgroundColor: 'rgba(255, 99, 132, 0.2)',
                    borderWidth: 2,
                    fill: true,
                },
                {
                    label: 'Revenus (€)',
                    data: [1000, 1500, 2000, 2500, 3000, 3500, 4000,8000,12000,13000,45000,50000], // Données pour les revenus
                    borderColor: 'rgba(255, 206, 86, 1)',
                    backgroundColor: 'rgba(255, 206, 86, 0.2)',
                    borderWidth: 2,
                    fill: true,
                }
            ]
        },
        options: {
            responsive: true,
            scales: {
                y: {
                    beginAtZero: true,
                    title: {
                        display: true,
                        text: 'Valeur'
                    }
                },
                x: {
                    title: {
                        display: true,
                        text: 'Mois'
                    }
                }
            },
            plugins: {
                legend: {
                    display: true,
                    position: 'top',
                },
                tooltip: {
                    mode: 'index',
                    intersect: false,
                }
            }
        }
    });
</script>

    </html>



