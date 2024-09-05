
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

    if (isset($_POST['envoi'])) {
        $nom = $_POST['nom'] ?? null;
        $prenom = $_POST['prenom'] ?? null;
        $contact = $_POST['contact'] ?? null;
        $email = $_POST['email'] ?? null;
        $mot_de_passe = $_POST['mot_de_passe'] ?? null;

        // Vérifiez que les champs requis ne sont pas vides
        if (empty($nom) || empty($prenom) || empty($contact) || empty($email) || empty($mot_de_passe)) {
            die("Veuillez remplir tous les champs");
        }

        // Vérifiez si l'email ou le mot de passe existe déjà
        $sql = "SELECT * FROM inscription WHERE email = :email OR mot_de_passe = :mot_de_passe";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':mot_de_passe', $mot_de_passe);
        $stmt->execute();

        if ($stmt->rowCount() > 0) {
            echo "Cet email ou ce mot de passe est déjà utilisé. Veuillez en choisir un autre.";
        } else {
            // Hachez le mot de passe avant de l'enregistrer
            $mot_de_passe_hashe = password_hash($mot_de_passe, PASSWORD_DEFAULT);

            // Insérez le nouvel utilisateur dans la base de données
            $sql = "INSERT INTO inscription(nom, prenom, contact, email, mot_de_passe) VALUES (:nom, :prenom, :contact, :email, :mot_de_passe)";
            $stmt = $conn->prepare($sql);

            $stmt->bindParam(':nom', $nom);
            $stmt->bindParam(':prenom', $prenom);
            $stmt->bindParam(':contact', $contact);
            $stmt->bindParam(':email', $email);
            $stmt->bindParam(':mot_de_passe', $mot_de_passe_hashe);

            $stmt->execute();

            echo "Inscription réussie !";
            header("Location: pages/accueil.php");
            exit; // Assurez-vous d'appeler exit après la redirection
        }
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

    if (isset($_POST['send'])) {
        $email = $_POST['email'] ?? null;
        $mot_de_passe = $_POST['mot_de_passe'] ?? null;

        // Vérifiez que les champs requis ne sont pas vides
        if (empty($email) || empty($mot_de_passe)) {
            die("Veuillez remplir tous les champs");
        }

        // Préparez la requête pour récupérer l'utilisateur par email
        $sql = "SELECT * FROM inscription WHERE email = :email";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':email', $email);
        $stmt->execute();

        // Récupérez l'utilisateur
        $utilisateur = $stmt->fetch(PDO::FETCH_ASSOC);

        // Vérifiez si l'utilisateur existe et si le mot de passe est correct
        if ($utilisateur && password_verify($mot_de_passe, $utilisateur['mot_de_passe'])) {
            // Redirigez vers la page d'accueil ou une autre page
            header("Location: pages/accueil.php");
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
<html lang="fr">
    <head>
        <meta charset="utf-8"/>
        <title>inscription</title>
        <link rel="stylesheet" href="css/all.min.css">
        <script src="js/all.min.js"></script>
        <?php
        include("inc/connexion.php");
        ?>
        
    </head>
    <body>
        <div class="container" id="container">
            <div class="form-container sign-up-container">
                <form method="post">
                    <h1>Creer un compte</h1>
                    <div class="social-container">
                    <a href="#"><i class="fa-brands fa-facebook"></i></a>
                    <a href="#"><i class="fab fa-google-plus-g"></i></a>
                    <a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
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
                <form method="post">
                    <h2>Se connecter</h2>
                    <div class="social-container">
                    <a href="#"><i class="fa-brands fa-facebook"></i></a>
                    <a href="#"><i class="fab fa-google-plus-g"></i></a>
                    <a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
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
    <script>
    const container=document.getElementById('container');
    const loginButton=document.getElementById('login');
    const signUpButton=document.getElementById('signUp');

    signUpButton.addEventListener('click', () =>{
    container.classList.add('panel-active');
})

    loginButton.addEventListener('click', () =>{
    container.classList.remove('panel-active');
})
</script>
</html>