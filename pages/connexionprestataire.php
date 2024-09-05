<?php
session_start(); // Assurez-vous de démarrer la session

// Informations d'identification de la base de données
$hote = 'localhost';
$nom_base = 'mon_site';
$utilisateur = 'root';
$mot_de_passe = '';
$port = 3307;

try {
    $conn = new PDO("mysql:host=$hote;port=$port;dbname=$nom_base", $utilisateur, $mot_de_passe);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    if (isset($_POST['signup'])) {
        $nom_et_prenom = $_POST['nom_et_prenom'] ?? null;
        $contact = $_POST['contact'] ?? null;
        $email = $_POST['email'] ?? null;
        $mot_de_passe = $_POST['mot_de_passe'] ?? null;
        $photo = $_FILES['photo']['name'] ?? null;

        // Vérifiez que les champs requis ne sont pas vides
        if (empty($nom_et_prenom)  || empty($contact) || empty($mot_de_passe) || empty($photo)) {
            die("Veuillez remplir tous les champs");
        }

        // Hachage du mot de passe
        $mot_de_passe_hash = password_hash($mot_de_passe, PASSWORD_BCRYPT);

        // Déplacement de l'image téléchargée
        $chemin_photo = 'uploads/' . basename($photo);
        move_uploaded_file($_FILES['photo']['tmp_name'], $chemin_photo);

        // Préparez la requête pour insérer l'utilisateur dans la base de données
        $sql = "INSERT INTO inscriptionprestataire (nom_et_prenom,contact, email, mot_de_passe, photo) VALUES (:nom_et_prenom, :contact, :email, :mot_de_passe, :photo)";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':nom_et_prenom', $nom_et_prenom);
        $stmt->bindParam(':contact', $contact);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':mot_de_passe', $mot_de_passe_hash);
        $stmt->bindParam(':photo', $chemin_photo);
        $stmt->execute();

        // Stockez les informations de l'utilisateur dans la session
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


<?php

// Informations d'identification de la base de données
$hote = 'localhost';
$nom_base = 'mon_site';
$utilisateur = 'root';
$mot_de_passe = '';
$port = 3307;

try {
    $conn = new PDO("mysql:host=$hote;port=$port;dbname=$nom_base", $utilisateur, $mot_de_passe);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    if (isset($_POST['connect'])) {
        $email = $_POST['email'] ?? null;
        $mot_de_passe = $_POST['mot_de_passe'] ?? null;

        // Vérifiez que les champs requis ne sont pas vides
        if (empty($email) || empty($mot_de_passe)) {
            die("Veuillez remplir tous les champs");
        }

        // Préparez la requête pour récupérer l'utilisateur par email
        $sql = "SELECT * FROM inscriptionprestataire WHERE email = :email";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':email', $email);
        $stmt->execute();

        // Récupérez l'utilisateur
        $utilisateur = $stmt->fetch(PDO::FETCH_ASSOC);

        // Vérifiez si l'utilisateur existe et si le mot de passe est correct
        if ($utilisateur && password_verify($mot_de_passe, $utilisateur['mot_de_passe'])) {
            // Stockez les informations de l'utilisateur dans la session
            $_SESSION['nom_et_prenom'] = $utilisateur['nom_et_prenom']; // Récupérer le nom
            $_SESSION['photo'] = $utilisateur['photo']; // Récupérer le chemin de la photo

            // Redirigez vers la page d'accueil ou une autre page
            header("Location: ../index.php"); // Redirige vers le tableau de bord
            exit;
        } else {
            echo "Identifiants invalides.";
        }
    }
} catch (PDOException $e) {
    echo "Erreur : " . $e->getMessage();
} catch (Exception $e) {
    echo "Erreur : " . $e->getMessage();
}

$conn = null;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prestataires</title>
    <link rel="stylesheet" href="../css/all.min.css">
    <script src="../js/all.min.js"></script>
    <?php
    include("../inc/prestataire.php");
    ?>
</head>
<body>
     <div class="main-container">
            <div class="wrapper">
                <span class="bg-animate"></span>
                <span class="bg-animate2"></span>
                <div class="form-box login">
                   <h2 class="animation" style="--i:0; --j:21;">SE CONNECTER</h2>
                   <form method="post" action="#">
                      <div class="input-box animation"style="--i:1; --j:22;">
                         <input type="email" name="email" required>
                         <label>e-mail</label>
                          <span><i class="fa-regular fa-envelope"></i></span>
                      </div>
                      <div class="input-box animation"style="--i:2; --j:23;" >
                           <input type="password" name="mot_de_passe" required>
                           <label>mot de passe</label>
                          <span><i class="fas fa-lock "></i></span>
            
                      </div>
                       <button type="submit" name="connect" class="btn animation" style="--i:3; --j:24;">Se connecter</button>
                     <div class="logreg-link animation " style="--i:4; --j:25;">
                       <p>vous etes nouveau? 
                        <a href="#" class="register-link">S'inscrire</a></p>
                     </div>
                    </form>
             </div>
        
            <div class="info-text login">
                <h2 class="animation"style="--i:0;--j:20;">Heureux de vous revoire!!!</h2>
                <p class="animation"style="--i:1;--j:21;">ServiceLink est heureux de vous satisfaire</p>
            </div>
            <div class="form-box register">
                <h2 class="animation"style="--i:17; --j:0;" id="my">S'INSCRIRE</h2>
                <form method="post" action="#" enctype="multipart/form-data">

                <div   class="input-box animation" style="--i:18; --j:1;" id="photo" >
                    <p>inserrer une photo</p>
                    <input type="file" id="photo" name="photo" accept="image/*"required>     
                    </div> 
                    <div class="input-box animation"style="--i:18; --j:1;">
                        <input type="text" name="nom_et_prenom" required>
                        <label>nom & prenom</label>
                        <span><i class="fa fa-users" aria-hidden="true"></i></span>
                    </div>
                    <div class="input-box animation"style="--i:18; --j:1;">
                        <input type="tel" name="contact"required>
                        <label>contact</label>
                        <span><i class="fa fa-phone" aria-hidden="true"></i></span>
                    </div>
                
                    <div class="input-box animation"style="--i:19; --j:3;">
                        <input type="email" name="email"required>
                        <label>e-mail</label>
                        <span><i class="fa fa-envelope" aria-hidden="true"></i></span>
                    </div>
                    <div class="input-box animation"style="--i:20; --j:4;">
                        <input type="password" name="mot_de_passe" required>
                        <label>mot de passe</label>
                        <span><i class="fa fa-key" aria-hidden="true"></i></span>
                    </div>
                    <button type="submit" name="signup"class="btn animation"style="--i:21; --j:5;">Adherer</button>
                    <div class="logreg-link animation"style="--i:22;">
                        <p>j'ai un compte?<a href="#" class="login-link">Se connecter</a></p>
                    </div>
                </form>
            </div>
            <div class="info-text register">
                <h2 class="animation"style="--i:17; --j:0;">ServiceLink vous souhaite la bienvenue !!!</h2>
                <p class="animation"style="--i:18; --j:1;">Apres votre inscription votre profil sera cree ce qui permettra aux clients de vous contacter
                <i class="fa-regular fa-face-smile"></i>
                </P>
            </div>
            </div>
            

            </div>
    
        </div>
    
    </div>
    
    <script src="../js/connexionprestataire.js"></script>
    

    
</body>
</html>