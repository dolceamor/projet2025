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

    // ID à récupérer (assurez-vous de définir l'ID que vous recherchez)
    $id = 1; // Remplacez par l'ID que vous souhaitez utiliser
    $stmt = $pdo->prepare("SELECT * FROM inscriptionprestataire WHERE id = :id");
    $stmt->bindParam(':id', $id, PDO::PARAM_INT);
    $stmt->execute();
    
    // Récupération de l'inscription
    $inscription = $stmt->fetch(PDO::FETCH_ASSOC);

} catch (PDOException $e) {
    echo "Erreur de connexion : " . $e->getMessage();
}
?>


<?php
session_start();

// Informations d'identification de la base de données
$hote = 'localhost';
$nom_base = 'mon_site';
$utilisateur = 'root';
$mot_de_passe = '';
$port = 3307;

try {
    $conn = new PDO("mysql:host=$hote;port=$port;dbname=$nom_base", $utilisateur, $mot_de_passe);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    if (isset($_POST['modifier'])) {
        $nom_et_prenom = $_POST['nom_et_prenom'] ?? null;
        $contact = $_POST['contact'] ?? null;
        $email = $_POST['email'] ?? null;
        $photo = $_FILES['photo']['name'] ?? null;

        // Vérifiez que les champs requis ne sont pas vides
        if (empty($nom_et_prenom) || empty($contact) || empty($email) || empty($photo)) {
            die("Veuillez remplir tous les champs");
        }

        // Déplacement de l'image téléchargée
        $chemin_photo = 'uploads/' . basename($photo);
        if (!move_uploaded_file($_FILES['photo']['tmp_name'], $chemin_photo)) {
            die("Erreur lors du téléchargement de la photo");
        }

        // Préparez la requête pour mettre à jour l'utilisateur dans la base de données
        $sql = "UPDATE inscriptionprestataire SET nom_et_prenom = :nom_et_prenom, contact = :contact, email = :email, photo = :photo WHERE id = :id";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':nom_et_prenom', $nom_et_prenom);
        $stmt->bindParam(':contact', $contact);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':photo', $chemin_photo);
        $stmt->bindParam(':id', $_SESSION['user_id']); // Assurez-vous que l'ID de l'utilisateur est stocké dans la session
        $stmt->execute();

        // Mettez à jour les informations de session
        $_SESSION['nom_et_prenom'] = $nom_et_prenom; // Récupérer le nom
        $_SESSION['photo'] = $chemin_photo; // Récupérer le chemin de la photo

        // Redirigez vers la page d'accueil ou une autre page
        header("Location: ../index.php"); // Redirige vers le tableau de bord
        exit;
    }
} catch (PDOException $e) {
    echo "Erreur : " . $e->getMessage();
} catch (Exception $e) {
    echo "Erreur : " . $e->getMessage();
}

$conn = null;
?>


<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modifier le Profil</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            background-color: #f4f4f9;
            margin: 0;
            padding: 20px;
        }

        h2 {
            text-align: center;
            color: #333;
        }

        form {
            max-width: 500px;
            margin: auto;
            padding: 30px;
            background: white;
            border-radius: 8px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }

        label {
            display: block;
            margin-bottom: 8px;
            font-weight: bold;
        }

        input[type="text"],
        input[type="tel"],
        input[type="email"],
        input[type="file"] {
            width: 100%;
            padding: 12px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 4px;
            transition: border-color 0.3s;
        }

        input[type="text"]:focus,
        input[type="tel"]:focus,
        input[type="email"]:focus {
            border-color: #4CAF50;
            outline: none;
        }

        button {
            width: 100%;
            background-color:#ca6212;
            color: white;
            padding: 12px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
            transition: background-color 0.3s;
        }

        button:hover {
            background-color:  #77B5FE;
        }
        /* Style pour le tableau */
table {
    width: 100%; /* Prend toute la largeur du conteneur */
    border-collapse: collapse; /* Supprime les espaces entre les cellules */
    margin-top: 20px; /* Espacement au-dessus du tableau */
}

/* Style pour l'en-tête du tableau */
th {
    background-color: #007bff; /* Couleur de fond de l'en-tête */
    color: white; /* Couleur du texte de l'en-tête */
    padding: 10px; /* Espacement interne */
    text-align: left; /* Alignement à gauche */
}

/* Style pour les cellules du tableau */
td {
    padding: 10px; /* Espacement interne */
    border: 1px solid #ddd; /* Bordure autour des cellules */
}

/* Style pour les lignes du tableau au survol */
tr:hover {
    background-color: #f1f1f1; /* Couleur de fond au survol */
}


        @media (max-width: 600px) {
            form {
                padding: 20px;
            }
            button {
                padding: 10px;
            }
        }
    </style>
</head>
<body>
<div class="main-container">
    <?php if ($inscription): ?>
        <table>
            <thead>
                <tr>
                    <th>Photo</th>
                    <th>Nom et Prénom</th>
                    <th>Contact</th>
                    <th>Email</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>
                        <img src="<?php echo htmlspecialchars($inscription['photo']); ?>" alt="Photo" class="inscription">
                    </td>
                    <td><?php echo htmlspecialchars($inscription['nom_et_prenom']); ?></td>
                    <td><?php echo htmlspecialchars($inscription['contact']); ?></td>
                    <td><?php echo htmlspecialchars($inscription['email']); ?></td>
                </tr>
            </tbody>
        </table>
    <?php else: ?>
        <p>Aucune inscription trouvée.</p>
    <?php endif; ?>
</div>



<h2>Modifier le Profil</h2>

<form id="profileForm" method="POST" enctype="multipart/form-data">
    <label for="name">Nom :</label>
    <input type="text" id="name" name="nom_et_prenom" required>

    <label for="contact">Contact :</label>
    <input type="text" id="phone" name="contact" required>

    <label for="email">Email :</label>
    <input type="email" id="email" name="email" required>

    <label for="photo">Photo de profil :</label>
    <input type="file" id="photo" name="photo" accept="image/*" required>

    <button type="submit" name="modifier">Sauvegarder</button>
</form>


</body>
</html>