<style>
*, *::before, *::after{
    margin:0;
    padding:0;
    box-sizing: border-box;
    font-family: 'Nunito', sans-serif;
}
html {
    font-size: 14px;
}

body {
    background: linear-gradient(rgba(0,0,0,0.6), rgba(0,0,0,0.6)), url(../images/img11.jpg);
    background-repeat: no-repeat;
    background-size: cover;
    height: 105vh;
    margin: 0; 
    transition: background-color .3s ease-in-out, color 0.3s ease-in-out;
}

ul {
    list-style: none;
}

a {
    text-decoration: none;
    color:#fff;
    transition: color 0.3s ease-in-out;
}

a:hover {
    color: #314657;
}

.dashboad-container {
    display: grid;
    grid-template-columns: 255px 1fr; 
    grid-template-areas: "sidebar main";
    gap: 2rem;
    height: 100vh; 
}

.main-sidebar {
    position: fixed; 
    top: 0; 
    left: 0; 
    width: 255px; 
    height: 100vh; 
    padding: 10px 0 10px 6px;
    overflow-y: auto; 
}

.main-sidebar .sidebar {
    position: relative;
    display: flex;
    flex-direction: column; 
    justify-content: flex-start; 
    padding-top: 1rem;
    padding-right: 1rem;
    width: 100%; 
}

.list-items .item a {
    display: flex;
    align-items: center;
    justify-content: left;
    gap: 12px;
    width: 100%;
    padding: 20px;
    font-size: 1.2rem;
    font-weight: 600;
    transition: all 0.3s ease-in-out;
}

.list-items .item a:hover {
    color: #77B5FE;
    transform: translateX(5%);
}


.main-content {
    margin-left: 255px; 
    padding: 20px; 
}
.logo{
    margin-top: -15px;
    margin-left: 10%;
    border-radius:50px;
}

/*formulaire dannoonce*/
.main-container {
    grid-area: main;
    padding: 2px 3px;
    width: 90%;
    margin-right: 15px;
    

}

.profile-container {
    background-color: #fff;
    padding: 7px;
    border-radius: 12px;
    box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
    max-width: 600px;
    margin: auto;
    transition: transform 0.3s;
}

.profile-container:hover {
    transform: scale(1.02);
}

h2 {
    text-align: center;
    color: #333;
}

.form-group {
    margin-bottom: 20px;
}

label {
    display: block;
    margin-bottom: 8px;
    font-size: 15px;
    color: #555;
}

input[type="text"],
input[type="email"],
input[type="tel"],
input[type="number"],
select {
    width: 100%;
    padding: 12px;
    border: 1px solid #ccc;
    border-radius: 6px;
    transition: border 0.3s;
}

input[type="text"]:focus,
input[type="email"]:focus,
input[type="tel"]:focus,
input[type="number"]:focus,
select:focus {
    border-color: #007bff;
    outline: none;
}

.photo-preview {
    display: block;
    margin-top: 10px;
    max-width: 100%;
    max-height: 200px;
    border: 1px solid #ccc;
    border-radius: 6px;
}

.publish-button {
    background-color: #ff7f00;
    color: white;
    border: none;
    padding: 12px 15px;
    border-radius: 6px;
    cursor: pointer;
    width: 100%;
    font-size: 16px;
    transition: background-color 0.3s;
}

.publish-button:hover {
    background-color: #0056b3;
}



</style>
