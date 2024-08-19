<?php

// Informations d'identification de la base de données
$hote = 'localhost';
$nom_base = 'prestataire';
$utilisateur = 'root';
$mot_de_passe ='';
$port=3307;

try {
  $conn = new PDO("mysql:host=$hote;port=$port;dbname=$nom_base", $utilisateur, $mot_de_passe);
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  if(isset($_POST['connect'])){
    $email = $_POST['email'] ?? null;
    $mot_de_passe = $_POST['mot_de_passe'] ?? null;

    // Vérifiez que les champs requis ne sont pas vides
    if( empty($email) || empty($mot_de_passe)) {
      die("Veuillez remplir tous les champs");
    }

    $mot_de_passe_hashe = password_hash($mot_de_passe, PASSWORD_DEFAULT);

    $sql = "INSERT INTO connexion( email, mot_de_passe) VALUES (:email, :mot_de_passe)";
    $stmt = $conn->prepare($sql);

    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':mot_de_passe', $mot_de_passe_hashe);

    $stmt->execute();

    echo "Inscription réussie !";
  }

} catch(PDOException $e) {
  echo "Erreur : " . $e->getMessage();
} catch(Exception $e) {
  echo "Erreur : " . $e->getMessage();
}

$conn = null;
if(isset($_POST['connect'])){
  header("Location:dashboad.html");
  exit;
}
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
                   <h2 class="animation" style="--i:0; --j:21;">Consulter compte</h2>
                   <form action="#">
                      <div class="input-box animation"style="--i:1; --j:22;">
                         <input type="email" required>
                         <label>e-mail</label>
                         <i class="fa-regular fa-envelope"></i>
                      </div>
                      <div class="input-box animation"style="--i:2; --j:23;" >
                           <input type="password" required>
                           <label>mot de passe</label>
                          <i class="fas fa-lock-open "></i>
            
                      </div>
                       <button type="submit" class="btn animation" style="--i:3; --j:24;">Se connecter</button>
                     <div class="logreg-link animation " style="--i:4; --j:25;">
                       <p>vous etes nouveau? 
                        <a href="#" class="register-link">S'inscrire</a></p>
                     </div>
                    </form>
             </div>
        
            <div class="info-text login">
                <h2 class="animation"style="--i:0;--j:20;">Heureux de vous revoire!!!</h2>
                <p class="animation"style="--i:1;--j:21;">White Services est heureux de vous satisfaire</p>
            </div>
            <div class="form-box register">
                <h2 class="animation"style="--i:17; --j:0;" id="my">Mon Profil</h2>
                <form action="#">
                    <div class="input-box animation"style="--i:18; --j:1;">
                        <input type="text" required>
                        <label>nom & prenom</label>
                        <i class="fa fa-users" aria-hidden="true"></i>
                    </div>
                    <div class="input-box animation"style="--i:18; --j:1;">
                        <input type="tel" required>
                        <label>contact</label>
                        <i class="fa fa-phone" aria-hidden="true"></i>
                    </div>

                    <div class="input-box animation"style="--i:18; --j:1;">
                        <input type="text" required>
                        <label>categorie de service</label>
                        
                    </div>
                    <div class="input-box animation"style="--i:19; --j:3;">
                        <input type="email" required>
                        <label>e-mail</label>
                        <i class="fa fa-envelope" aria-hidden="true"></i>
                    </div>
                    <div class="input-box animation"style="--i:20; --j:4;">
                        <input type="password" required>
                        <label>mot de passe</label>
                        <i class="fa fa-key" aria-hidden="true"></i>
                    </div>
                    <button type="submit" class="btn animation"style="--i:21; --j:5;">S'incrire</button>
                    <div class="logreg-link animation"style="--i:22;">
                        <p>vous possedez profil?<a href="#" class="login-link">Se connecter</a></p>
                    </div>
                </form>
            </div>
            <div class="info-text register">
                <h2 class="animation"style="--i:17; --j:0;">White Services vous souhaite la bienvenue !!!</h2>
                <p class="animation"style="--i:18; --j:1;">Nous vous accompagnons dans votre carriere professionnelle en vous aidant a obtenir un emploi
                    tout en esperant que vous en sortirez satisfait de nos services <i class="fa fa-smile-o" aria-hidden="true"></i>
            </div>
            </div>
            

            </div>
    
        </div>
    
    </div>
    
    <script src="../js/connexionprestataire.js"></script>
    

    
</body>
</html>