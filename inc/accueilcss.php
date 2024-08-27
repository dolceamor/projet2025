<style>
    *{
    margin: 0;
    padding: 0;
}
.main{
    width: 100%;
    background: linear-gradient(rgba(0,0,0,0.6), rgba(0,0,0,0.6)), url(../images/img4.jpg);
    background-color: rgba(0, 0, 0, 0.5);
    box-shadow: 0px 10px 20px rgba(0, 0, 0, 0.4); 
    background-position: center;
    background-size: cover;
    height: 109vb;
    
    }
 
.navbar{
    width: 1170px;
    height: 75px;
}
.icon{
    width: 200px;
    float: left;
    height: 70px;
}
.logo{
    margin-top: 5px;
    margin-left: 30%;
    border-radius:50px;
}
.menu{
    width: 400px;
    float: left;
    height: 70px;
    margin-left: 0.1%;
    margin-top: 4px;
}
ul{
    float: left;
    display: flex;
    justify-content: center;
    align-items: center;
}
ul li{
    list-style: none;
    margin-left: 62px;
    margin-top: 27px;
    font-size: 17px;
}
ul li a{
    text-decoration: none;
    color: #fff;
    font-family: Arial;
    font-weight: bold;
    transition: 0.4s ease-in-out;
}
ul li a:hover{
    color: dodgerblue;
}
.search{
    width: 330px;
    float: left;
    margin-left: 85%;
    margin-top: -70px;
}
.srch{
    font-family: 'Times New Roman';
    width: 195px;
    height: 21px;
    background: transparent;
    border: 1px solid ;
    margin-top: 10px;
    color: #fff;
    border-right: none;
    font-size: 16px;
    padding: 10px;
    border-bottom-left-radius: 5px;
    border-top-left-radius: 5px;


}
.btn{
    width: 100px;
    height: 40px;
    background: #Ff7f00;
    border: 2px solid #Ff7f00;
    margin-top: 13px;
    color: #fff;
    font-size: 15px;
    border-bottom-right-radius: 5px;
    border-bottom-left-radius: 5px;
    
    
}


.btn:focus{
    outline: none;
}
.srch:focus{
    outline: none;
}
.content{
    width: 1200px;
    height: auto;
    margin: auto;
    color: #fff;
    position: relative;
    
    
}
.content .par{
    padding-left: 20px;
    padding-bottom: 25px;
    font-family: Arial;
    letter-spacing: 1.2px;
    line-height: 30px;
    color: #fff;
    
}
.content h1{
    font-family: 'Times New Roman';
    font-size: 50px;
    padding-left: 20px;
    margin-top: 15%;
    letter-spacing: 2px;

}
.content .call{
    width: 180px;
    height: 40px;
    background: #Ff7f00;
    border: none;
    margin-left: 20px;
    margin-top:40px;
    font-size: 18px;
    border-radius: 10px;
    cursor: pointer;
    transition: .4s ease;
} 
.content .call a{
    text-decoration: none;
    color: #fff;
    transition: .3s ease;
}

.content span{
    color:dodgerblue;
    font-size: 60px;
}


.chart-container {
    overflow: hidden; 
    position: relative; 
    width: 96%; /* Ajustez selon votre mise en page */
    margin: 40px auto; /* Ajoute un espace au-dessus et en dessous */
    padding: 20px;
    background-color: rgba(255, 255, 255, 0.9); /* Fond blanc semi-transparent */
    border-radius: 10px; /* Coins arrondis */
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2); /* Ombre pour un effet de profondeur */
}

.chart-container h2{
text-align: center; /* Centrer le titre */
margin-bottom: 20px; /* Espace en dessous du titre */
}

.images {
    display: flex; 
    transition: transform 0.5s ease; 
}

.images img {
    max-width: 250px; 
    margin: 0 15px; 
    border-radius: 8px; 
    border: 2px solid #fff; 
    padding: 5px; 
    transition: transform 0.3s ease; 
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
}

.images img:hover {
    transform: scale(1.1); 
}


.recent-offers {
    width: 96%; /* Ajustez selon votre mise en page */
    margin: 40px auto; /* Ajoute un espace au-dessus et en dessous */
    padding: 20px;
    background-color: rgba(255, 255, 255, 0.9); /* Fond blanc semi-transparent */
    border-radius: 10px; /* Coins arrondis */
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2); /* Ombre pour un effet de profondeur */
}

.recent-offers h2 {
    text-align: center; /* Centrer le titre */
    margin-bottom: 20px; /* Espace en dessous du titre */
}

.recent-offers ul {
    list-style-type: none; 
    display: grid; 
    grid-template-columns: repeat(4, 1fr); 
    gap: 20px; 
    padding: 20px;
    
    
}


.recent-offers li {
    border: 1px solid dodgerblue;
    width: 45vh;
    height:60vh;
    margin: 10px 0;
    background-Color:#fff;
    border-radius: 8px;
    
}
.recent-offers p{
padding:7px;
padding-left:20px;
}

.offre-photo {
    max-width: 80px;
    display: block;
    margin: 10px auto;
    margin-left:20px;
    
}
.recent-offers h3{
 padding-left:20px; 
}

.postuler-button {
    background-color: #Ff7f00;
    color: white;
    border: none;
    border-radius: 5px; 
    margin-left:20px;
    padding: 10px 15px;
    cursor: pointer;
}

.postuler-button:hover {
    background-color: #007BFF; /* Couleur au survol */
}

.voir-plus {
    background-color: #007BFF; 
    color: white; 
    border: none; 
    border-radius: 5px; 
    padding: 10px 20px; 
    font-size: 16px; 
    cursor: pointer; 
    transition: background-color 0.3s, transform 0.3s; 
}

.voir-plus:hover {
    background-color: #Ff7f00; 
    transform: scale(1.05); 
}

/* Modal pour lenvoir de la candidature*/

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


.footer {
    background-color: #382405;
    color: white;
    text-align: center;
    padding: 20px 0;
    }

.footer-content {
    max-width: 1170px;
    height:140px;
    margin: 0 auto;
    margin-top:10px;
    display: flex;
    justify-content:space-between;
    }

    
.footer-menu a {
    color: white;
    text-decoration: none;
    font-size:20px;
    display: block;
    margin-top:7px;
}

.footer-menu a:hover {
    text-decoration: underline;
    color:#Ff7f00;
}
.footer-content p{
    font-size:20px;   
}
.reseau .icon{
    margin-top:7px;
    font-size:25px;
    
}

.modal {
    display: none; 
    position: fixed;
    z-index: 1;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(0, 0, 0, 0.7); 
    justify-content: center;
    align-items: center;
    transition: opacity 0.3s ease; 
}

.modal-content {
    background-color: #fff; 
    border-radius: 10px; 
    padding: 20px;
    box-shadow: 0 4px 30px rgba(0, 0, 0, 0.1); 
    animation: fadeIn 0.5s; 
}

.close {
    color: #aaa; 
    float: right;
    font-size: 28px;
    font-weight: bold;
}

.close:hover,
.close:focus {
    color: black; /* Couleur au survol */
    text-decoration: none;
    cursor: pointer;
}

.modal-button {
    background-color: #007BFF; 
    color: white; 
    border: none; 
    border-radius: 5px; 
    padding: 10px 20px; 
    font-size: 16px; 
    cursor: pointer; 
    margin: 10px; 
    transition: background-color 0.3s, transform 0.3s; 
}

.modal-button:hover {
    background-color: #0056b3; 
    transform: scale(1.05); 
}

@keyframes fadeIn {
    from { opacity: 0; }
    to { opacity: 1; }
}


</style>