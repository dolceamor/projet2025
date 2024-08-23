<?php
// Configuration de la base de données
$host = 'localhost'; // Adresse du serveur
$db = 'mon_site'; // Nom de la base de données
$user = 'root'; // Nom d'utilisateur
$pass = ''; // Mot de passe
$port = 3307;

try {
    // Connexion à la base de données
    $pdo = new PDO("mysql:host=$host;port=$port;dbname=$db;charset=utf8", $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Vérification si le formulaire est soumis
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Récupération des données du formulaire
        $name = $_POST['name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $services = $_POST['services'];
        $salary = $_POST['salary'];
        $date = $_POST['date'];

        // Gestion de l'upload de la photo
        if (isset($_FILES['photo']) && $_FILES['photo']['error'] === UPLOAD_ERR_OK) {
            $photo = $_FILES['photo'];

            $uploadDir = 'uploads/';
            
            // Vérifiez si le dossier existe, sinon créez-le
            if (!is_dir($uploadDir)) {
                mkdir($uploadDir, 0755, true);
            }

            $photoPath = $uploadDir . basename($photo['name']);
            $fileType = strtolower(pathinfo($photoPath, PATHINFO_EXTENSION));
            $allowedTypes = ['jpg', 'jpeg', 'png', 'gif'];

            // Vérifiez le type de fichier
            if (in_array($fileType, $allowedTypes)) {
                // Déplacez le fichier téléchargé
                if (move_uploaded_file($photo['tmp_name'], $photoPath)) {
                    // Préparation de la requête SQL
                    $stmt = $pdo->prepare("INSERT INTO offres (name, email, phone, photo, services, salary, date) VALUES (?, ?, ?, ?, ?, ?, ?)");
                    $stmt->execute([$name, $email, $phone, $photoPath, $services, $salary, $date]);

                    echo "L'offre a été publiée avec succès.";
                } else {
                    echo "Erreur lors du déplacement du fichier.";
                }
            } else {
                echo "Type de fichier non autorisé. Veuillez télécharger une image (jpg, jpeg, png, gif).";
            }
        } else {
            echo "Aucun fichier n'a été téléchargé ou une erreur s'est produite lors de l'upload.";
        }
    }
} catch (PDOException $e) {
    echo "Erreur de connexion : " . $e->getMessage();
}
?>



<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Annonces</title>
    
    <?php
    include("../inc/annoncescss.php")
    ?>

</head>
<body>
    <div class="dashboad-container">
        <div class="main-sidebar">
            <div class="sidebar">
                <img src="../images/img10.jpg" width="32%" class="logo">
                <ul class="list-items">
                    <li class="item">
                        <a href="#">
                            <span>Formulaire</span>
                        </a>
                    </li>  
                    <li class="item">
                        <a href="offres.php">
                            <span>Parcourir les offres d'emploi</span>
                        </a>
                    </li>
                    

                     <li class="item">
                        <a href="#">
                            <span>Deconnexion</span>
                        </a>
                    </li>


                </ul>
            </div>
        </div>
        
        <div class="main-container">
            <div class="profile-container">
                <h2>PROPOSER VOTRE OFFRE D'EMPLOI</h2>
                <form method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="name">Nom :</label>
                        <input type="text" id="name" name="name" required>
                    </div>
                    
                    <div class="form-group">
                        <label for="email">Email :</label>
                        <input type="email" id="email" name="email" required>
                    </div>
                    
                    <div class="form-group">
                        <label for="phone">Téléphone :</label>
                        <input type="tel" id="phone" name="phone" required>
                    </div>
            
                    <div class="form-group">
                        <label for="photo">Insérer votre photo :</label>
                        <input type="file" id="photo" name="photo" accept="image/*" required>
                        <img id="photoPreview" src="" alt="Aperçu de la photo" class="photo-preview" />
                    </div>
            
                    <div class="form-group">
                        <label for="services">Vous désirez quelle catégorie de service ?</label>
                        <select id="services" name="services" required>
                            <option value="">Sélectionnez un service</option>
                            <option>Menagere</option>
                            <option>Agent de securite</option>
                            <option>Plombier</option>
                            <option>Repetiteur</option>
                            <option>Techniciens de surface</option>
                            <option>Developpeur</option>
                            <option>Coiffure</option>
                            <option>Infirmier</option>
                            <option>Comptable</option>
                            <option>Electriciens</option>
                            <option>Reparateur d'equipement eletromenagers</option>
                            <option>Organisateurs d'evenement</option>
                            <option>Enseignant</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="salary">Proposer un salaire :</label>
                        <input type="number" id="salary" name="salary" required placeholder="Montant en euros">
                   </div>
                   <div class="form-group">
                    <label for="salary">Inserrer la date du jour:</label>
                    <input type="date" id="salary" name="date" required placeholder="Montant en euros">
               </div>
            
                    <button type="submit" class="publish-button">Poster l'offre</button>
                </form>
                
            </div>
            
 </div>
 <script>
    document.getElementById('photo').addEventListener('change', function(event) {
        const file = event.target.files[0];
        const reader = new FileReader();

        reader.onload = function(e) {
            document.getElementById('photoPreview').src = e.target.result;
        }

        if (file) {
            reader.readAsDataURL(file);
        }
    });
    </script>
    
 </body>