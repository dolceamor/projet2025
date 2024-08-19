<?php

// Informations d'identification de la base de données
$hote = 'localhost';
$nom_base = 'mon_site';
$utilisateur = 'root';
$mot_de_passe ='';
$port=3307;

try {
  $conn = new PDO("mysql:host=$hote;port=$port;dbname=$nom_base", $utilisateur, $mot_de_passe);
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  if(isset($_POST['send'])){
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
if(isset($_POST['send'])){
  header("Location:page2.html");
  exit;
}
?>
<?php

// Informations d'identification de la base de données
$hote = 'localhost';
$nom_base = 'mon_site';
$utilisateur = 'root';
$mot_de_passe ='';
$port=3307;

try {
  $conn = new PDO("mysql:host=$hote;port=$port;dbname=$nom_base", $utilisateur, $mot_de_passe);
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  if(isset($_POST['envoi'])){
    $nom = $_POST['nom'] ?? null;
    $prenom = $_POST['prenom'] ?? null;
    $contact = $_POST['contact'] ?? null;
    $email = $_POST['email'] ?? null;
    $mot_de_passe = $_POST['mot_de_passe'] ?? null;

    // Vérifiez que les champs requis ne sont pas vides
    if(empty($nom) || empty($prenom) || empty($contact) || empty($email) || empty($mot_de_passe)) {
      die("Veuillez remplir tous les champs");
    }

    $mot_de_passe_hashe = password_hash($mot_de_passe, PASSWORD_DEFAULT);

    $sql = "INSERT INTO inscription(nom, prenom, contact, email, mot_de_passe) VALUES (:nom, :prenom, :contact, :email, :mot_de_passe)";
    $stmt = $conn->prepare($sql);

    $stmt->bindParam(':nom', $nom);
    $stmt->bindParam(':prenom', $prenom);
    $stmt->bindParam(':contact', $contact);
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
if(isset($_POST['envoi'])){
  header("Location:page2.html");
  exit;
}
?>


<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8"/>
        <title>inscription</title>
        <link rel="stylesheet" href="css/connexion.css" type="text/css"/>
        <link rel="stylesheet" href="css/all.min.css"/>
        
    </head>
    <body>
        <div class="container" id="container">
            <div class="form-container sign-up-container">
                <form method="post"action="register.php">
                    <h1>Creer un compte</h1>
                    <div class="social-container">
                    <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                    <a href="#"><i class="fab fa-google-plus-g"></i></a>
                    </div>
                    <span> utiliser compte gmail</span>
                    <input type="text" placeholder="Nom" name="nom" required>
                    <input type="text" placeholder="Prenom"  name="prenom" required>
                    <input type="tel" placeholder="Contact" name="contact" required>
                    <input type="email" placeholder="E-mail" name="email" required>
                    <input type="password" placeholder="Mot de passe" minlength="8" maxlength="30" name="mot_de_passe" required>
                    <button type="submit" name="envoi">creer le compte</button>
                </form>

            </div>
            <div class="form-container login-container">
                <form method="post" action="connecter.php">
                    <h2>Se connecter</h2>
                    <div class="social-container">
                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                    <a href="#"><i class="fab fa-google-plus-g"></i></a>
                    </div>
                    <span> je n'ai pas de compte</span>
                    <input type="email" placeholder="E-mail" name="email"required>
                    <input type="password" placeholder="Mot de passe" name="mot_de_passe" minlength="8" required>
                    <button type="submit" name="send">Se connecter</button>
                </form>

            </div>
            <div class="overlay-container">
                <div class="overlay">
                    <div class="overlay-panel overlay-left">
                      <h1> HEUREUX DE VOUS REVOIR</h1>
                      <p>NOUS DONNONS LE MEILLEUR DE NOUS POUR VOUS AIDER</p>
                      <button class="ghost" id="login"> Se connecter</button>
                    </div>
                
                   <div class="overlay-panel overlay-right">
                      <h1> BIENVENUE SUR ServiceLink</h1>
                      <p>EXPLORATEUR DE SOLUTION PAR EXCELLENCE:VOUS SATISFAIRE EST NOTRE PRIORITE</p>
                     <button class="ghost" id="signUp">Creer un compte</button>
                   </div>
                </div>
            </div>
        </div>
        <script src="js/connexion.js" meta charset="utf-8"></script>
    </body>
</html>