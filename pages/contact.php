<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>responsive contact</title>
    <link rel="stylesheet" href="../css/all.min.css">
    <script src="../js/all.min.js"></script>
    
    <?php
    include("../inc/contactcss.php");
    ?>
</head>
<body>
    <section class="contact">
        <div class="content">
            <h2>Contact us</h2>
            <p>Bienvenue sur ServiceLink ceci est notre page contact.Vous rencontrez un soucis? Alors laissez nous un message</p>
        </div>
        <div class="container">
            <div class="contactInfo">
                <div class="box">
                    <div class="icon"><i class="fa-solid fa-location-dot"></i></div>
                    <div class="text">
                        <h3>Adress</h3>
                        <p>Douala Cameroun</p>
                    </div>
                </div>
                <div class="box">
                    <div class="icon"><i class="fa fa-phone" aria-hidden="true"></i></div>
                    <div class="text">
                        <h3>phone</h3>
                        <p>+237 657839263</p>
                    </div>
                </div>
                <div class="box">
                    <div class="icon"><i class="fa-regular fa-envelope"></i></div>
                    <div class="text">
                        <h3>email</h3>
                        <p>blanchetchuisseu68@gmail.com</p>
                    </div>
                </div>
            </div>
                <div class="contactForm">
                    <form>
                        <h2>Send Message</h2>
                        <div class="inputBox">
                            <input type="text" name="" required="required">
                            <span>full name</span>
                        </div>
                        <div class="inputBox">
                            <input type="email" name="" required="required">
                            <span>Email</span>
                        </div>
                        <div class="inputBox">
                            <textarea required="required"></textarea>
                             <span>type your message</span>
                        </div>
                        <div class="inputBox">
                            <input type="submit" name="" value="Send">
                            
                        </div>
                        
                    </form>
                </div>
            </div>
        </div>
    </section>
    
</body>
</html>
