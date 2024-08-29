<?php
// Configuration de la base de données
$host = 'localhost';
$db = 'mon_site';
$user = 'root';
$pass = '';
$port = 3307;

try {
    // Connexion à la base de données
    $pdo = new PDO("mysql:host=$host;port=$port;dbname=$db;charset=utf8", $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Récupérer les quatre premières offres d'emploi
    $query = $pdo->query("SELECT * FROM offres ORDER BY date DESC LIMIT 4");
    $recentOffers = $query->fetchAll(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    echo "Erreur de connexion : " . $e->getMessage();
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8"/>
    <title>Accueil</title>
    <link rel="stylesheet" href="../css/all.min.css">
    <script src="../js/all.min.js"></script>
    

    <?php include("../inc/accueilcss.php"); ?>
</head>
<body>
    <div class="main">
        <div class="navbar">
            <div class="icon">
                <img src="../images/img10.jpg" width="32%" class="logo">
            </div>
            <div class="menu">
                <ul>
                    <li><a href="#">Accueil</a></li>
                    <li><a href="connexionprestataire">Prestataires</a></li>
                    <li><a href="#">Demandeurs</a></li>
                    <li><a href="offres.php">Annonces</a></li>
                    <li><a href="#" onclick="openAccountModal()">Compte</a></li>

                </ul>
            </div>
            <div class="search">
                <input class="srch" name="" placeholder=".....rechercher">
                <a href="#"><button class="btn">Search</button></a>
            </div>
        </div>

        <div class="content">
            <h1>BIENVENUE SUR<br><span>ServiceLink</span></h1>
            <p class="par">Explorateur de solution par excellence ServiceLink est une application 
                web de prestation<br> de service qui met en relation les clients et les professionnels, elle réserve un emploi à <br> chacun de ses utilisateurs possédant un savoir-faire 
                dans tous les domaines tout en répondant <br> aux besoins de tous les demandeurs en recherche d'employés ou en attente d'un service.
            </p>
            <button class="call"><a href="contact.php">Nous contacter</a></button>
            <button class="call"><a href="contact.php"> Contacter un service</a></button>
        </div> 
    </div>

 <div id="accountModal" class="modal">
    <div class="modal-content">
        <span class="close" onclick="closeAccountModal()">&times;</span>
        <h3>Choisissez votre type de compte</h3>
        <button class="modal-button" onclick="location.href='connexionprestataire.php'">Proffessionnel</button>
        <button class="modal-button" onclick="location.href='demandeur.php'">Client</button>
    </div>
 </div>



    

<div class="chart-container">
    <h2>PRESENTATION DE QUELQUES SERVICES</h2>
    <div class="images" id="image-slider">
        <img src="../images/img7.jpg" alt="Service 1"/>
        <img src="../images/img2.jpg" alt="Service 2"/>
        <img src="../images/img9.jpg" alt="Service 3"/>
        <img src="../images/img8.jpg" alt="Service 4"/>
        <img src="../images/img8.avif" alt="Service 5"/>
        <img src="../images/img8.jpeg" alt="Service 6"/>
        <img src="../images/img10.jpeg" alt="Service 7"/>
    </div>
</div>
 <div class="recent-offers">
    <h2>OFFRES RECENTES</h2>
    <ul>
        <?php foreach ($recentOffers as $offer): ?>
            <li>
                <img src="<?php echo htmlspecialchars($offer['photo']); ?>" alt="Photo" class="offre-photo" >
                <h3><?php echo htmlspecialchars($offer['name']); ?></h3>
                <p>Email: <?php echo htmlspecialchars($offer['email']); ?></p>
                <p>Téléphone: <?php echo htmlspecialchars($offer['phone']); ?></p>
                <p>Services: <?php echo htmlspecialchars($offer['services']); ?></p>
                <p>Salaire: <?php echo htmlspecialchars($offer['salary']); ?> FCFA</p>
                <p>Date: <?php echo htmlspecialchars($offer['date']); ?></p>
                
                <button class="postuler-button" onclick="openModal()">Postuler</button>
            </li>
        <?php endforeach; ?>
    </ul>
   <a href="offres.php"> <button class="voir-plus">Voir plus</button></a>

</div>


<div id="modal" class="modal">
        <div class="modal-content">
            <span class="close" onclick="closeModal()">&times;</span>
            <h3>Formulaire de Candidature</h3>
            <form id="applicationForm" method="post" enctype="multipart/form-data">
              <label for="applicantName">Nom :</label>
              <input type="text" name="applicantName" id="applicantName" required>
              <br>
              <label for="applicantFirstName">Prénom :</label>
              <input type="text" name="applicantFirstName" id="applicantFirstName" required>
              <br>
              <label for="applicantContact">Contact :</label>
              <input type="text" name="applicantContact" id="applicantContact" required>
              <br>
              <label for="applicantEmail">Email :</label>
              <input type="email" name="applicantEmail" id="applicantEmail" required>
              <br>
              <label for="cvInput">Ajouter votre CV :</label>
              <input type="file" name="cv" id="cvInput" accept=".pdf,.doc,.docx" required>
              <br>
              <input type="hidden" name="jobPosterEmail" value="blanchetchuisseu@gmail.com">
              <button type="submit">Envoyer</button>
         </form>

        </div>
    </div>

    <footer class="footer">
    <div class="footer-content">
                <p>&copy; 2024 ServiceLink. Tous droits réservés.</p>
                <div class="footer-menu">
                    <h1>Liens utiles</h1>
                    <a href="#">Politique de confidentialité</a>
                    <a href="#">Conditions d'utilisation</a>
                    <a href="#">Prestataire</a>
                    <a href="#">Demandeur</a>
                    <a href="#">Annonces</a>
                    <a href="#">Compte</a>
                    <a href="#">Aide</a>
                </ul>
               </div>
               <div class="reseau">
                <h1>Nos reseaux</h1>
                <div class="icon">
                <i class="fa-brands fa-facebook"></i>
                <i class="fa-brands fa-youtube"></i>
                <i class="fa-brands fa-google"></i>
                <i class="fa-brands fa-linkedin"></i>
               </div>
              </div>
            </div>
    </footer>
    

</body>
<script>
    /*Mettre les imges de la page daccueil en mouvement*/

    const imagesContainer = document.getElementById('image-slider');
    const images = imagesContainer.children;
    let index = 0;

    function slideImages() {
        index++;
        if (index >= images.length) {
            index = 0; // Réinitialise l'index si on atteint la fin
        }
        const offset = -index * (images[0].clientWidth + 10); // Calcule l'offset en fonction de la largeur de l'image et de l'espacement
        imagesContainer.style.transform = `translateX(${offset}px)`; // Applique la translation
    }

    setInterval(slideImages, 3000); // Change d'image toutes les 3 secondes

/*Modal du formulaire de soumission de la canditatre*/
        function openModal() {
            document.getElementById("modal").style.display = "flex";
        }

        function closeModal() {
            document.getElementById("modal").style.display = "none";
        }

        function submitApplication() {
            alert("Votre candidature a été soumise avec succès !");
            closeModal();
            return false; // Empêche la soumission réelle pour cet exemple
        }


        function openAccountModal() {
    document.getElementById("accountModal").style.display = "flex";
}

function closeAccountModal() {
    document.getElementById("accountModal").style.display = "none";
}

</script>


    

</html>
