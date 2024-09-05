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

    // Récupération des offres d'emploi
    $stmt = $pdo->query("SELECT * FROM offres");
    $offres = $stmt->fetchAll(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    echo "Erreur de connexion : " . $e->getMessage();
}
?>

<?php
// Configuration de la base de données
$host = 'localhost';
$db = 'mon_site';
$user = 'root';
$pass = '';
$port = 3307;


try {
    // Création de la connexion PDO
    $pdo = new PDO("mysql:host=$host;port=$port;dbname=$db;charset=utf8", $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Vérification si le formulaire est soumis
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        // Récupération des données du formulaire
        $name = $_POST['applicantName'];
        $firstName = $_POST['applicantFirstName'];
        $contact = $_POST['applicantContact'];
        $email = $_POST['applicantEmail'];

        // Gestion du téléchargement du CV
        if (isset($_FILES['cv']) && $_FILES['cv']['error'] == UPLOAD_ERR_OK) {
            $cvPath = 'uploads/' . basename($_FILES['cv']['name']);
            move_uploaded_file($_FILES['cv']['tmp_name'], $cvPath);

            // Préparation de la requête SQL
            $stmt = $pdo->prepare("INSERT INTO applications (name, firstname, contact, email, cv) VALUES (?, ?, ?, ?, ?)");
            $stmt->execute([$name, $firstName, $contact, $email, $cvPath]);

            echo 'Candidature soumise avec succès!';
        } else {
            echo 'Erreur lors du téléchargement du CV.';
        }
    }
} catch (PDOException $e) {
    echo 'Erreur : ' . $e->getMessage();
}
?>

<?php

require '../vendor/autoload.php';
use PHPMailer\PHPMailer\PHPMailer;

$servername = "localhost"; 
$username = "root"; 
$password = ""; 
$dbname = "mon_site"; 
$port = 3307;

try {
    $pdo = new PDO("mysql:host=$servername;port=$port;dbname=$dbname;charset=utf8", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = htmlspecialchars($_POST['applicantName']);
        $firstName = htmlspecialchars($_POST['applicantFirstName']);
        $contact = htmlspecialchars($_POST['applicantContact']);
        $emailA = htmlspecialchars($_POST['applicantEmail']);
        $jobPosterEmail = htmlspecialchars($_POST['jobPosterEmail']);

        // Récupération du service
    $service = htmlspecialchars($_POST['service']); // Ajoutez cette ligne

        // Gestion du téléchargement du CV
        if (isset($_FILES['cv']) && $_FILES['cv']['error'] == UPLOAD_ERR_OK) {
            $cvPath = 'uploads/' . basename($_FILES['cv']['name']);
            move_uploaded_file($_FILES['cv']['tmp_name'], $cvPath);

            // Préparer l'e-mail avec PHPMailer
            $mail = new PHPMailer;
            try {
                // Paramètres du serveur SMTP
                $mail->isSMTP();
                $mail->Host = 'smtp.gmail.com'; // Utilisez votre serveur SMTP
                $mail->SMTPAuth = true;
                $mail->Username = 'blanchetchuisseu68@gmail.com'; // Votre adresse e-mail
                $mail->Password = 'efmw yaiu oyjr mrwa'; // Votre mot de passe
                $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
                $mail->Port = 587;

                // Destinataires
                $mail->setFrom($emailA, $name);
                $mail->addAddress($jobPosterEmail, 'Blanche Tchuisseu');

                // Contenu
                $mail->Subject = "Nouvelle candidature pour l'offre d'emploi: $service";
                $mail->Body = "Nom : $name  \n Prénom : $firstName \n Contact: $contact \n Email: $emailA \n \n CV : $cvPath";
                $mail->addAttachment($cvPath);
                // Envoyer l'e-mail
                $mail->send();

                // Insérer dans la base de données
                $stmt = $pdo->prepare("INSERT INTO applications (name, firstname, contact, email, cv) VALUES (?, ?, ?, ?, ?)");
                $stmt->execute([$name, $firstName, $contact, $emailA, $cvPath]);

                echo "Votre candidature a été envoyée avec succès !";
            } catch (Exception $e) {
                echo "Erreur lors de l'envoi de votre candidature: {$mail->ErrorInfo}";
            }
        } else {
            echo "Erreur lors du téléchargement du CV.";
        }
    } else {
        echo "Méthode de requête non autorisée.";
    }
} catch (PDOException $e) {
    echo "Erreur : " . $e->getMessage();
}
?>


<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Offres d'Emploi</title>
    <style>
        body{
    width: 96%;
    background: linear-gradient(rgba(0,0,0,0.6), rgba(0,0,0,0.6)), url(../images/img4.jpg);
    background-repeat: no-repeat;
    background-size:cover;
    background-position:center;
    background-attachment: fixed;
    height: 109vb;
        }

.main-container ul {
    display: grid; /* Active le modèle de grille */
    grid-template-columns: repeat(4, 1fr); /* Crée quatre colonnes de largeur égale */
    gap: 30px; /* Espacement entre les éléments */
    padding: 20px;
    
}

.main-container h2 {
    position: fixed;
    top: -15px;
    left: 0;
    width: 100%;
    background-color: dodgerblue;
    color: white;
    padding: 2px;
    text-align: center;
    z-index: 1000;
    
}

ul {
    list-style-type: none;
    
}

li {
    border: 1px solid dodgerblue;
    padding: 15px;
    margin: 10px 0;
    background-Color:#fff;
    border-radius: 8px;
    
    
}

.offre-photo {
    max-width: 80px;
    display: block;
    margin: 10px auto;
    margin-left:40%;
    border-radius:50%;
    object-fit: cover;
    
}

.postuler-button {
    background-color: #Ff7f00;
    color: white;
    border: none;
    border-radius: 5px; 
    margin-left:40%;
    padding: 10px 15px;
    cursor: pointer;

}

.modal {
            display: none;
            position: fixed;
            z-index: 1;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
            justify-content: center;
            align-items: center;
        }

        .modal-content {
            background-color: white;
            padding: 20px;
            border-radius: 5px;
            text-align: center;
            width: 400px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.2);
        }

        .close {
            cursor: pointer;
            float: right;
            font-size: 25px;
            color: #Ff7f00;
        }

        

        form {
            display: flex;
            flex-direction: column;
            gap: 5px;
            margin-top:3px;
            
        }

        label {
            font-weight: bold;
        }

        input[type="text"],
        input[type="email"],
        input[type="file"] {
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            transition: border-color 0.3s;
        }

        input[type="text"]:focus,
        input[type="email"]:focus {
            border-color: #007BFF;
            outline: none;
        }

        button[type="submit"] {
            background-color: dodgerblue;
            color: white;
            border: none;
            padding: 10px;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        button[type="submit"]:hover {
            background-color: #Ff7f00;
        }

    </style>
</head>
<body>
    <div class="main-container">
        <h2>Offres d'Emploi</h2>
        <?php if (count($offres) > 0): ?>
            <ul>
                <?php foreach ($offres as $offre): ?>
            
                    <li>
                        <img src="<?php echo htmlspecialchars($offre['photo']); ?>" alt="Photo" class="offre-photo">
                        <h3><?php echo htmlspecialchars($offre['name']); ?></h3>
                        <p>Email: <?php echo htmlspecialchars($offre['email']); ?></p>
                        <p>Téléphone: <?php echo htmlspecialchars($offre['phone']); ?></p>
                        <p>Services: <?php echo htmlspecialchars($offre['services']); ?></p>
                        <p>Salaire: <?php echo htmlspecialchars($offre['salary']); ?> FCFA</p>
                        <p>Date: <?php echo htmlspecialchars($offre['date']); ?></p>
                        
                        <button class="postuler-button" 
                        onclick="openModal('<?php echo htmlspecialchars($offre['email']); ?>', '<?php echo htmlspecialchars($offre['services']); ?>')">Postuler</button>
                    </li>
        
                <?php endforeach; ?>
            </ul>
        <?php else: ?>
            <p>Aucune offre d'emploi disponible.</p>
        <?php endif; ?>
    </div>

    
<div id="modal" class="modal">
        <div class="modal-content">
            <span class="close" onclick="closeModal()">&times;</span>
            <h3>Formulaire de Candidature</h3>
     <form id="applicationForm" method="post" enctype="multipart/form-data">
    <label for="applicantName">Nom :</label>
    <input type="text" name="applicantName" id="applicantName" required>
    
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
    <input type="hidden" name="jobPosterEmail" value="">
    <input type="hidden" name="service" value="">
    <button type="submit">Envoyer</button>
</form>

        </div>
    </div>
    

    


    
    
    
</body>
<script>
        function openModal() {
            document.getElementById("modal").style.display = "flex";
        }

        function closeModal() {
            document.getElementById("modal").style.display = "none";
        }
        function openModal(jobPosterEmail, service) {
    document.getElementById("modal").style.display = "flex";
    document.querySelector('input[name="jobPosterEmail"]').value = jobPosterEmail; // Mettre à jour le champ caché
    document.querySelector('input[name="service"]').value = service; // Mettre à jour le champ caché pour le service
}



        function submitApplication() {
            alert("Votre candidature a été soumise avec succès !");
            closeModal();
            return false; // Empêche la soumission réelle pour cet exemple
        }
</script>

</html>
