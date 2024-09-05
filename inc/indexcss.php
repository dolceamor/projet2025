<style>
    :root{
    --white: #fff;
    --light:#f3f4ee;
    --fuscha:hsl(334,94%,57%);
    --desaturate-fuscha: hsla(334,94%,57%,0.15);
;    --desaturate-fuscha-2: hsla(334,94%,57%,0.1);
    --cyan:hsla(184,46%,57%);
    --desaturate-cyan: hsla(184,46%,57%,0.25);
    --desaturate-cyan-2: hsla(184,46%,57%,0.15);
    --light-blue: #bbeef1;
    --pinkless: #f1b813;
    --yellow: #f1b813;

    --text-color-primary:#314657;
    --text-color-secondary:#58626e;
    --text-color-third:#9db3be;

    --box-shadow-card:28px var(--desaturate-fuscha);
    --border-shadow-card-2:50% var(--desaturate-cyan);
    --box-sidebar:2px 4px 16px var(--desaturate-cyan-2);

    --padding-card:28px;
    --border-raduis-rounded:50%;
    --border-raduis-4:4px;
    --border-raduis-8:8px;
    --border-raduis-12:12px;
    --border-raduis-card: var(--padding-card);
    



}

.dark-mode{
    --white:#393e46;
    --light:#222831;
    --desaturate-fuscha: hsla(334,8%,67%,0.15);
    
    --teext-color-primary:#eee;
    --text-color-secondary:#eee;

    --box-shadow-card: 8px 8px 32px var(--desaturate-fuscha);
    --box-shadow-card-2: 8px 8px 32px var(--desaturate-cyan);


}


*, *::before, *::after{
    margin:0;
    padding:0;
    box-sizing: border-box;
    font-family: 'Nunito', sans-serif;
}

html{
    font-size: 14px;
}

body{
    background-color:  var(--light);
    color: var(--text-color-primary);
    height: 100vh;
    transition: background-color .3s ease-in-out,color 0.3s ease-in-out;
}
ul{
    list-style: none;
}
a{
    text-decoration: none;
    color:  var(--text-color-secondary);
    transition: color 0.3s ease-in-out;
}
a:hover{
    color: var(--text-color-primary);
}


.text-primary{
    color: var(--text-color-primary);
}
.text-secondary{
    color: var(--text-color-secondary);

}
.text-third{
    color: var(--text-color-third);
}
.dashboad-container{
    display: grid;
    grid-template-columns: 3fr 7fr 2fr;
    grid-template-areas: "sidebar main extrabar";
    gap: 4rem;
    height: 100%;
}
/*sidebar*/
.main-sidebar {
    grid-area: sidebar;
    position: fixed; /* Fixe la barre latérale */
    width: 250px;
    padding: 10px 0 10px 6px;
    background-color:#ADD8E6;
    height: 100%; /* Hauteur de 100% pour occuper tout l'espace vertical */
    overflow-y: auto; /* Permet le défilement si le contenu dépasse */
}

.main-sidebar .aside-header {
    display: flex;
    justify-content: space-between;
    align-items: center; /* Corrigé pour aligner correctement */
}

.main-title {
    font-size: 40px;
    line-height: 1.8;
}

.aside-header .main-title {
    display: flex;
    align-items: center;
}

.aside-header .close {
    padding-right: 10px;
    font-weight: bold;
    display: none;
}

.main-sidebar .sidebar {
    position: relative;
    height: auto; /* Ajustez la hauteur si nécessaire */
    display: flex;
    justify-content: center;
    padding-top: 1rem;
    padding-right: 1rem;
    width: 100%; /* Utilise toute la largeur disponible */
}

.sidebar .list-items {
    width: 100%; /* Ajustez pour s'assurer que la liste utilise toute la largeur */
}

.list-items li:last-child {
    position: absolute;
    width: 100%;
}

.list-items .item a {
    display: flex;
    align-items: center;
    justify-content: left;
    gap: 12px;
    width: 100%;
    padding: 16px 3rem 18px 2px;
    font-size: 1.2rem;
    font-weight: 600;
    transition: all 0.3s ease-in-out;
}

.list-items .item a:hover {
    color: #77B5FE;
    transform: translateX(5%);
}

.item .message-count {
    background-color: var(--fuscha);
    text-align: center;
    border-radius: var(--border-radius-4);
    color: var(--light);
    border: 1px solid var(--text-color-secondary);
    padding: 0 8px;
    transition: all 0.3s ease-in-out;
}

.item a:hover .message-count,
.item a:active .message-count,
.item a.active .message-count {
    background-color: #fff;
    color: #77B5FE;
    border: 1px solid #77B5FE;
}



/* ************* Main************* */

.main-container{
    grid-area: main;
    padding: 50px 3px;
    width: 100%;
    margin-right: 15px;
    
}

.insights{
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 20px;
    margin-bottom: 1rem;
    
}

.insights .card{
    background-color: var(--white);
    padding: 10px;
    border-radius: 20px;
    box-shadow: var(--box-shadow-card);
    transition: box-shadow 0.3s ease-in-out;
}
.insights .card:hover{
    box-shadow: var(--box-shadow-card-2);
}
.card .card-header span {
    padding: 8px;
    border-radius: var(--border-raduis-rounded);
    font-size: 30px;

}
.insights .card:nth-child(1) .card-header span {
    color: var(--yellow);
    border: 1px solid var(--yellow);
}
.insights .card:nth-child(2) .card-header span {
    color: var(--fuscha);
    border: 1px solid var(--fuscha);
}
.insights .card:nth-child(3) .card-header span {
    color: var(--cyan);
    border: 1px solid var(--cyan);
}
.card-body{
    display: flex;
    align-items: center;
    justify-content: space-between;
    margin-bottom: 1rem;
}
.card-body h1{
    font-size:15px;
}
.card-body .card-progress{
    display: flex;
    justify-content: center;
    align-items: center;
    position: relative;
    width: 90px;
    height: 90px;
    border-radius: var(--border-raduis-rounded);
}
.card-body svg circle{
    fill: none;
    stroke-width: 10px;
    stroke-dasharray: 200.2;
    stroke-dashoffset: 100.2;
    transform: translate(10px, 10px);
    stroke-linecap: round;
    transition: stroke-dashoffset 1s ease-in;
}
.card-body .percentage{
    position: absolute;
    font-weight: 700;
}
.card-footer{
    font-size: 16px;
    color: var(--text-color-third);
    font-weight: 600;
}

.recent-orders{
    margin-top: 4rem;
}

.recent-orders .ro-title{
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-bottom: 1rem;
    margin-left: 20px;
}
.recent-orders .ro-title a{
    font-size: 20px;
    font-weight: 700;
    transition: 0.3s ease-in;
    padding-right: 50px;
}
.recent-orders .ro-title a:hover{
    color: var(--fuscha);
}
.recent-orders table{
    width: 100%;
    background-color: var(--white);
    padding: var(--padding-card);
    border-radius: var(--border-raduis-card);
    box-shadow: var(--box-shadow-card);
    text-align: center;
    transition: box-shadow 0.3s ease-in-out;
    overflow: hidden;
    border-spacing: 0;
}
.recent-orders table:hover{
    box-shadow: var(--box-shadow-card-2);
}
.recent-orders tbody td,
.recent-orders thead th{
    padding: 12px 24px;

}
.recent-orders table tbody tr{
    transition: 0.15s ease-in;
    
}
.recent-orders table tbody tr:nth-child(2n + 1){
    background-color: var(--desaturate-fuscha-2);
    
}
.recent-orders tbody tr:hover{
    background-color: var(--desaturate-cyan-2) !important;
}
.action-buttons{
    display:flex;
    gap:10px;
}
.action-buttons button{
    padding: 10px 15px;
    background-color: #77B5FE;
    color: white;
    border: none;
    cursor: pointer;
    border-radius: 5px;

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


.chart-container {
   width: 98%;
   margin: auto;
   margin-top:30px;
   background: white;
   padding: 15px;
   border-radius: 8px;
   box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
}
h2 {
   text-align: center;
   color: #333;
}




/* **************extrabar*********** */
.extrabar{
    grid-area:extrabar ;
    transition: background-color 0.3s ease-in-out ;
    width: 200px;
    
}
.extrabar .header-right{
    display: flex;
    justify-content: end;
    align-items: center;
    gap: 1rem;
    margin-bottom: 1rem;
}
.header-right .toggle-menu-btn{
    display: none;
}
.header-right .toggle-theme{
    display: flex;
    justify-content: center;
    align-items: center;
    background-color: var(--desaturate-cyan);
    border-radius: var(--border-raduis-8);
    cursor: pointer;
    margin-top: -20px;
}
.header-right .toggle-theme span{
    font-size: 20px;
    padding: 4px 8px;
    display: flex;
    align-items: center;
    justify-content: center;
    transition: 0.3s ease-in;
}
.header-right .toggle-theme span:hover{
    background-color: var(--desaturate-fuscha);
    border-radius: var(--border-raduis-8);
}
.header-right .toggle-theme .light.active{
    background-color: var(--fuscha);
    border-radius: var(--border-raduis-8);
    color: var(--light);
}
.header-right .profile{
    display: flex;
    justify-content: end;
    align-items: center;
    gap: 1rem;
}
.header-right .profile .profile-info h2{
    font-size: 1rem;

}

.recent-updates{
    background-color: var(--white);
    border-radius: var(--border-raduis-card);
    padding:10px 5px ;
    box-shadow: var(--box-shadow-card);
    transition: 0.3s ease-in-out;
    margin-bottom: 10px
}
.recent-updates:hover{
    box-shadow: var(--box-shadow-card-2);
}
.recent-updates h2{
    margin-bottom: 1rem;
    font-size: 20px;

}
.recent-updates .update{
    display: flex;
    align-items: center;
    justify-content: start;
    margin-bottom: 20px;
    font-size: 16px;
    text-align: left;
}
/*stats anal*/
.analytics h2{
    margin-bottom: 10px;
}
.analytics .order{
    display: flex;
    align-items: center;
    gap: 20px;
    background-color: var(--white);
    margin-bottom: 10px;
    padding: 20px 2px;
    box-shadow: var(--box-shadow-card);
    border-radius: var(--border-raduis-12);
    transition: 0.3s ease-in;
}
.analytics .order:hover{
    box-shadow: var(--border-shadow-card-2);
}
.analytics .order .order-details{
    display: flex;
    justify-content: space-between;
    align-items: center;
    width: 100%;
}
.analytics .order .order-details small{
    font-size: 14px;
}



.analytics .order:nth-of-type(1) .order-icon{
    color: var(--cyan);
}
.analytics .order:nth-of-type(2) .order-icon{
    color: var(--fuscha);
}
.analytics .order:nth-of-type(3) .order-icon{
    color: var(--yellow);
}
.analytics .new-product{
    display: flex;
    justify-content: center;
    align-items: center;
    width: 100%;
    padding: 20px 40px;
    border-radius: var(--border-raduis-12);
    border: 1px solid transparent;
    border-color: var(--fuscha);
    text-transform: uppercase;
    gap: 10px;
    cursor: pointer;
    user-select: none;
    transition: 0.3s ease-in;
}

.analytics .new-product:hover{
    background-color: var(--fuscha);
    color: var(--light);
    border-color: var(--desaturate-fuscha);
    box-shadow: 4px 4px 2px var(--desaturate-cyan);

}

.profile-image{
    width: 64px;
    display: flex;
    align-items: center;
    justify-content: center;
    margin-right: 16px;
    border-radius: var(--border-raduis-rounded);
    overflow: hidden;
}

.stroke-fuscha{
    stroke: var(--fuscha);
}
.stroke-yellow{
    stroke: var(--yellow);
}
.stroke-cyan{
    stroke: var(--cyan);
}
.text-fuscha{
    color: var(--fuscha);
}
.text-yellow{
    color: var(--yellow);
}
.text-cyan{
    color: var(--cyan);
}
.bg-fuscha{
    background-color: var(--fuscha);
}
.bg-yellow{
    background-color: var(--yellow);
}
.bg-cyan{
    background-color: var(--cyan);
}

body.dark-mode {
    color: #fff; 
}

/* mode responsif*/
/* Ajout de styles pour les écrans plus petits */

@media (max-width: 1200px) {
    .dashboad-container {
        grid-template-columns: 1fr; /* Une seule colonne pour les petits écrans */
    }
    .main-sidebar {
        width: 100%; /* La barre latérale prend toute la largeur */
    }
    .main-container {
        margin-right: 0; /* Supprimez la marge droite */
        padding: 20px; /* Réduire le padding */
    }
    .extrabar {
        width: 100%; /* La barre d'extra prend toute la largeur */
    }
}

@media (max-width: 768px) {
    .insights {
        grid-template-columns: 1fr; /* Une seule colonne pour les cartes */
    }
    .recent-orders table {
        font-size: 12px; /* Réduire la taille de police pour les petites écrans */
    }
    .recent-orders .ro-title {
        flex-direction: column; /* Aligner le titre et le lien verticalement */
        align-items: flex-start; /* Alignement à gauche */
    }
    .recent-orders .ro-title a {
        padding-right: 0; /* Supprimer le padding droit */
    }
    
    .header-right .profile {
        flex-direction: column; /* Alignement vertical des éléments de profil */
    }
}

@media (max-width: 480px) {
    .main-title {
        font-size: 28px; /* Réduire la taille de la police du titre principal */
    }
    .list-items .item a {
        padding: 10px; /* Réduire le padding des éléments de la liste */
        font-size: 1rem; /* Réduire la taille de la police */
    }
    .card-body .percentage {
        font-size: 14px; /* Réduire la taille de la police du pourcentage */
    }
    .recent-updates h2 {
        font-size: 18px; /* Réduire la taille de la police des mises à jour récentes */
        
    }
    
}





</style>