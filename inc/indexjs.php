<script>
    const body = document.body;
const openSidebar = document.querySelector('#openSidebar');
const closeSidebar = document.querySelector('#closeSidebar');
const toggleTheme = document.querySelector('.toggle-theme');
const sidebar = document.querySelector('.main-sidebar');
const light = toggleTheme.children[0];
const dark = toggleTheme.children[1];
const percentage = document.querySelectorAll('.percentage p');

// Ouvrir la barre latérale
openSidebar.addEventListener('click', () => {
    sidebar.style.left = '0%'; 
});

// Fermer la barre latérale
closeSidebar.addEventListener('click', () => {
    sidebar.style.left = '-100%'; 
});

// Changer le thème
toggleTheme.addEventListener('click', changeTheme);

// Fonction pour changer le thème
function changeTheme() {
    if (body.classList.contains('dark-mode')) {
        lightMode();
    } else {
        darkMode();
    }
}

// Vérifier les préférences de couleur du système
if (window.matchMedia && window.matchMedia('(prefers-color-scheme: dark)').matches) {
    darkMode();
}

// Fonction pour le mode clair
function lightMode() {
    body.classList.remove('dark-mode');
    light.classList.add('active');
    dark.classList.remove('active');
}

// Fonction pour le mode sombre
function darkMode() {
    body.classList.add('dark-mode');
    light.classList.remove('active');
    dark.classList.add('active');
}

// Animer les cercles de pourcentage
percentage.forEach((e, i) => {
    let val = parseInt(e.textContent);
    let circle = document.getElementById(`circle${i + 1}`);
    let r = circle.getAttribute('r');
    let circ = Math.PI * 2 * r;
    let fillValue = (circ * (100 - val)) / 100;
    let counter = 0;

    // Stocker l'ID de l'intervalle pour pouvoir l'arrêter plus tard
    let interval = setInterval(() => {
        if (counter === val) {
            clearInterval(interval); // Utiliser l'ID de l'intervalle pour le stopper
        } else {
            counter += 1;
            e.innerText = counter + '%';
            circle.style.strokeDashoffset = fillValue;
        }
    }, 1000 / val);
});

function lightMode() {
    body.classList.remove('dark-mode');
    light.classList.add('active');
    dark.classList.remove('active');
}

function darkMode() {
    body.classList.add('dark-mode');
    light.classList.remove('active');
    dark.classList.add('active');
}

    percentage.forEach((e, i) => {
        let val = parseInt(e.textContent);
        let circle = document.getElementById(`circle${i + 1}`);
        let r = circle.getAttribute('r');
        let circ = Math.PI * 2 * r;
        let fillValue = (circ * (100 - val)) / 100;
        let counter = 0;
    
        // Stocker l'ID de l'intervalle pour pouvoir l'arrêter plus tard
        let interval = setInterval(() => {
            if (counter === val) {
                clearInterval(interval); // Utiliser l'ID de l'intervalle pour le stopper
            } else {
                counter += 1;
                e.innerText = counter + '%';
                circle.style.strokeDashoffset = fillValue;
            }
        }, 1000 / val);
    });
    
   
    

</script>