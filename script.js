let services = [];

// Fonction pour afficher la liste des services
function displayServices() {
    const serviceList = document.getElementById("service-list");
    serviceList.innerHTML = ""; // Réinitialiser la liste
    services.forEach((service, index) => {
        const li = document.createElement("li");
        li.className = "service-item";
        li.innerHTML = `
            <div>
                <strong>${service.name}</strong><br>
                Prix: ${service.price} €<br>
                Description: ${service.description}
            </div>
            <button onclick="deleteService(${index})">Supprimer</button>
        `;
        serviceList.appendChild(li);
    });
}

// Fonction pour ajouter un service
document.getElementById("service-form").addEventListener("submit", function(event) {
    event.preventDefault(); // Empêcher le rechargement de la page
    const name = document.getElementById("service-name").value;
    const price = document.getElementById("service-price").value;
    const description = document.getElementById("service-description").value;

    services.push({ name, price, description });
    displayServices();

    // Réinitialiser le formulaire
    this.reset();
});

// Fonction pour supprimer un service
function deleteService(index) {
    services.splice(index, 1);
    displayServices();
}

// Afficher les services au chargement de la page
displayServices();
