function showForm() {
    document.getElementById('form-container').style.display = 'block';
    document.getElementById('overlay').style.display = 'block';
}

function hideForm() {
    document.getElementById('form-container').style.display = 'none';
    document.getElementById('overlay').style.display = 'none';
}

function submitPurchase(event) {
    event.preventDefault(); // Empêche le rechargement de la page

    const name = document.getElementById('name').value;
    const email = document.getElementById('email').value;
    const property = document.getElementById('property').value;
    const amount = document.getElementById('amount').value;
    const paymentMethod = document.getElementById('payment-method').value;

    // Validation simple
    if (!name || !email || !property || !amount || !paymentMethod) {
        alert('Veuillez remplir tous les champs.');
        return;
    }

    // Affichage d'un message de confirmation
    alert(`Merci ${name} ! Votre achat d'un(e) ${property} pour un montant de ${amount} € a été effectué avec succès.\nMéthode de paiement : ${paymentMethod}`);

    // Réinitialisation du formulaire
    document.getElementById('purchase-form').reset();
    
    // Masquer le formulaire après soumission
    hideForm();
}

function toggleFavorite(propertyName, propertyPrice) {
    alert(`Bien ajouté aux favoris : ${propertyName} à ${propertyPrice}`);
}

document.getElementById('overlay').addEventListener('click', hideForm);
function openPopup() {
    const popupContent = `
        <!DOCTYPE html>
        <html lang="fr">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <link rel="stylesheet" href="styles.css">
            <title>Estimation Immobilière</title>
            <style>
                body {
                    font-family: Arial, sans-serif;
                    background-color: #f0f8ff;
                    display: flex;
                    justify-content: center;
                    align-items: center;
                    height: 100vh;
                    margin: 0;
                }
                .form-container {
                    background-color: #ffffff;
                    border-radius: 10px;
                    box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
                    padding: 20px;
                    width: 400px;
                }
                h2 {
                    text-align: center;
                    color: #007bff;
                }
                label {
                    margin-top: 10px;
                    font-weight: bold;
                    color: #333;
                }
                input, select {
                    width: 100%;
                    padding: 10px;
                    margin: 10px 0;
                    border: 2px solid #007bff;
                    border-radius: 5px;
                    box-sizing: border-box;
                }
                input:focus, select:focus {
                    border-color: #0056b3;
                    outline: none;
                }
                button {
                    background-color: #007bff;
                    color: white;
                    padding: 10px;
                    border: none;
                    border-radius: 5px;
                    cursor: pointer;
                    width: 100%;
                    font-size: 16px;
                }
                button:hover {
                    background-color: #0056b3;
                }
                .result {
                    margin-top: 20px;
                    text-align: center;
                    color: #333;
                }
            </style>
        </head>
        <body>
            <div class="form-container">
                <form id="estimate-form" onsubmit="calculateEstimate(event)">
                    <h2>Estimation d'un Bien Immobilier</h2>
                    <label for="property-type">Type de Bien :</label>
                    <select id="property-type" required>
                        <option value="">Sélectionnez un bien</option>
                        <option value="Appartement">Appartement</option>
                        <option value="Maison">Maison</option>
                        <option value="Terrain">Terrain</option>
                    </select>
                    <label for="surface">Surface (m²) :</label>
                    <input type="number" id="surface" required min="1" placeholder="Surface en m²">
                    <label for="location">Localisation :</label>
                    <input type="text" id="location" required placeholder="Localisation du bien">
                    <label for="zone">Zone :</label>
                    <select id="zone" required>
                        <option value="">Sélectionnez une zone</option>
                        <option value="Centre-ville">Centre-ville</option>
                        <option value="Banlieue">Banlieue</option>
                        <option value="Rural">Rural</option>
                    </select>
                    <label for="condition">État du Bien :</label>
                    <select id="condition" required>
                        <option value="">Sélectionnez l'état</option>
                        <option value="Neuf">Neuf</option>
                        <option value="Bon état">Bon état</option>
                        <option value="À rénover">À rénover</option>
                    </select>
                    <button type="submit">Estimer</button>
                </form>
                <div id="result" class="result"></div>
            </div>

            <script>
                function calculateEstimate(event) {
                    event.preventDefault();
                    const propertyType = document.getElementById('property-type').value;
                    const surface = parseFloat(document.getElementById('surface').value);
                    const condition = document.getElementById('condition').value;
                    const zone = document.getElementById('zone').value;
                    let basePricePerM2;

                    switch (propertyType) {
                        case 'Appartement':
                            basePricePerM2 = 600;
                            break;
                        case 'Maison':
                            basePricePerM2 = 5000;
                            break;
                        case 'Terrain':
                            basePricePerM2 = 7500;
                            break;
                        default:
                            alert('Veuillez sélectionner un type de bien.');
                            return;
                    }

                    let conditionMultiplier;
                    switch (condition) {
                        case 'Neuf':
                            conditionMultiplier = 1.2;
                            break;
                        case 'Bon état':
                            conditionMultiplier = 1.0;
                            break;
                        case 'À rénover':
                            conditionMultiplier = 0.8;
                            break;
                        default:
                            alert('Veuillez sélectionner l\'état du bien.');
                            return;
                    }

                    let zoneMultiplier;
                    switch (zone) {
                        case 'Centre-ville':
                            zoneMultiplier = 1.5;
                            break;
                        case 'Banlieue':
                            zoneMultiplier = 1.2;
                            break;
                        case 'Rural':
                            zoneMultiplier = 0.8;
                            break;
                        default:
                            alert('Veuillez sélectionner une zone.');
                            return;
                    }

                    const estimatedPrice = surface * basePricePerM2 * conditionMultiplier * zoneMultiplier;
                    document.getElementById('result').innerHTML = \`
                        <h3>Estimation</h3>
                        <p>Le prix estimé pour votre \${propertyType} de \${surface} m² dans la zone \${zone} est de <strong>\${estimatedPrice.toLocaleString('fr-FR', { style: 'currency', currency: 'XAF' })}</strong>.</p>
                    \`;
                }
            </script>
        </body>
        </html>
    `;

    const popupWindow = window.open('', 'EstimationPopup', 'width=600,height=600');
    popupWindow.document.open();
    popupWindow.document.write(popupContent);
    popupWindow.document.close();
}
const properties = [
    { title: "Appartement à Bonapriso", price: "9 000 000 fcfa", lat: 4.0511, lng: 9.7085, virtualTour: "https://example.com/visite1", image: "https://via.placeholder.com/200" },
    // Ajoutez d'autres propriétés ici
];

const map = L.map('map').setView([4.0511, 9.7085], 13);
L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
    maxZoom: 19,
    attribution: '© OpenStreetMap'
}).addTo(map);

properties.forEach(property => {
    const marker = L.marker([property.lat, property.lng]).addTo(map);
    marker.bindPopup(`
        <img src="${property.image}" class="popup-image" alt="${property.title}"><br>
        <b>${property.title}</b><br>
        <span class="price">Prix: ${property.price}</span><br>
        <i class="fas fa-heart icon" onclick="addToFavorites('${property.title}')" title="Ajouter aux Favoris"></i> 
        <i class="fas fa-route icon" onclick="showRoute(${property.lat}, ${property.lng})" title="Itinéraire"></i> 
        <a href="${property.virtualTour}" target="_blank"><i class="fas fa-eye icon" title="Visite Virtuelle"></i></a>
    `);
});

function addToFavorites(title) {
    const favoritesList = document.getElementById('favoritesList');
    const listItem = document.createElement('li');
    listItem.textContent = title;
    favoritesList.appendChild(listItem);
}

function searchLocation() {
    const location = document.getElementById('location').value;
    const geocoder = L.Control.Geocoder.nominatim();
    
    geocoder.geocode(location, function(results) {
        if (results.length > 0) {
            const latLng = results[0].center;
            map.setView(latLng, 13);
            L.marker(latLng).addTo(map).bindPopup("Vous êtes ici").openPopup();
        } else {
            alert('Localisation non trouvée');
        }
    });
}

function showRoute(lat, lng) {
    if (typeof userMarker !== 'undefined') {
        map.removeLayer(userMarker);
    }
    navigator.geolocation.getCurrentPosition(function(position) {
        const userLatLng = [position.coords.latitude, position.coords.longitude];
        userMarker = L.marker(userLatLng).addTo(map).bindPopup("Vous êtes ici").openPopup();
        L.Routing.control({
            waypoints: [
                L.latLng(userLatLng),
                L.latLng(lat, lng)
            ],
            routeWhileDragging: true
        }).addTo(map);
    }, function() {
        alert("Impossible de récupérer votre position.");
    });
}

// Fonction pour envoyer des alertes par email (nécessite un backend ou un service d'email)
function sendEmailAlert(propertyTitle) {
    // Utilisez un service comme EmailJS ou un backend pour envoyer l'alerte
    alert(`Alerte envoyée pour la propriété: ${propertyTitle}`);
}

// Statistiques (exemple simple)
function showStatistics() {
    // Intégrer une API pour récupérer les statistiques sur le marché immobilier
    alert("Statistiques du marché immobilier :\n- Prix moyen: 8 500 000 fcfa\n- Taux de vente: 75%");
}
function calculateLoan() {
    const amount = document.getElementById('amount').value;
    const interest = document.getElementById('interest').value / 100 / 12;
    const years = document.getElementById('years').value * 12;

    const x = Math.pow(1 + interest, years);
    const monthlyPayment = (amount * x * interest) / (x - 1);

    if (!isNaN(monthlyPayment) && (monthlyPayment != Infinity) && (monthlyPayment > 0)) {
        document.getElementById('result').innerText = `Votre mensualité est de : €${monthlyPayment.toFixed(2)}`;
    } else {
        document.getElementById('result').innerText = "Veuillez vérifier vos entrées.";
    }
}

function openFavorites() {
const modal = document.getElementById('favorites-modal');
modal.style.display = 'block';
displayFavorites(); // Afficher les favoris lors de l'ouverture
}

function closeFavorites() {
const modal = document.getElementById('favorites-modal');
modal.style.display = 'none';
}

// Fermer la fenêtre flottante si l'utilisateur clique en dehors de celle-ci
window.onclick = function(event) {
const modal = document.getElementById('favorites-modal');
if (event.target === modal) {
modal.style.display = 'none';
}
}

// Appeler displayFavorites pour afficher les favoris au chargement de la page
window.onload = displayFavorites;
function toggleFavorite(title, price) {
    let favorites = JSON.parse(localStorage.getItem('favorites')) || [];
    const icon = event.target; // Récupérer l'icône cliquée

    // Vérifier si la propriété est déjà dans les favoris
    const index = favorites.findIndex(fav => fav.title === title);
    if (index > -1) {
        // Retirer des favoris
        favorites.splice(index, 1);
        icon.classList.remove('favorited'); // Retirer la classe favorisée
        alert(`${title} a été retiré de vos favoris.`);
    } else {
        // Ajouter aux favoris
        favorites.push({ title, price });
        icon.classList.add('favorited'); // Ajouter la classe favorisée
        alert(`${title} a été ajouté à vos favoris.`);
    }

    // Sauvegarder les favoris dans le stockage local
    localStorage.setItem('favorites', JSON.stringify(favorites));
}

// Fonction pour afficher les favoris
function displayFavorites() {
    const favorites = JSON.parse(localStorage.getItem('favorites')) || [];
    const favoritesContainer = document.getElementById('favorites-container');
    favoritesContainer.innerHTML = '';

    if (favorites.length === 0) {
        favoritesContainer.innerHTML = '<p>Aucun favori enregistré.</p>';
        return;
    }

    favorites.forEach(fav => {
        const favoriteDiv = document.createElement('div');
        favoriteDiv.className = 'favorite-property';
        favoriteDiv.innerHTML = `<h4>${fav.title}</h4><p>Prix: ${fav.price}</p>`;
        favoritesContainer.appendChild(favoriteDiv);
    });
}

// Appeler displayFavorites pour afficher les favoris au chargement de la page
window.onload = displayFavorites;
function toggleFavorite(title, price) {
    let favorites = JSON.parse(localStorage.getItem('favorites')) || [];
    const icon = event.target; // Récupérer l'icône cliquée

    // Vérifier si la propriété est déjà dans les favoris
    const index = favorites.findIndex(fav => fav.title === title);
    if (index > -1) {
        // Retirer des favoris
        favorites.splice(index, 1);
        icon.classList.remove('favorited'); // Retirer la classe favorisée
        alert(`${title} a été retiré de vos favoris.`);
    } else {
        // Ajouter aux favoris
        favorites.push({ title, price });
        icon.classList.add('favorited'); // Ajouter la classe favorisée
        alert(`${title} a été ajouté à vos favoris.`);
    }

    // Sauvegarder les favoris dans le stockage local
    localStorage.setItem('favorites', JSON.stringify(favorites));
}

// Fonction pour afficher les favoris
function displayFavorites() {
    const favorites = JSON.parse(localStorage.getItem('favorites')) || [];
    const favoritesContainer = document.getElementById('favorites-container');
    favoritesContainer.innerHTML = '';

    if (favorites.length === 0) {
        favoritesContainer.innerHTML = '<p>Aucun favori enregistré.</p>';
        return;
    }

    favorites.forEach(fav => {
        const favoriteDiv = document.createElement('div');
        favoriteDiv.className = 'favorite-property';
        favoriteDiv.innerHTML = `<h4>${fav.title}</h4><p>Prix: ${fav.price}</p>`;
        favoritesContainer.appendChild(favoriteDiv);
    });
}

// Appeler displayFavorites pour afficher les favoris au chargement de la page
window.onload = displayFavorites;
function openForm() {
    document.getElementById('form-containe').style.display = 'block';
    document.getElementById('overla').style.display = 'flex';
}

function closeForm() {
    document.getElementById('form-containe').style.display = 'none';
    document.getElementById('overla').style.display = 'none';
}

// Fonction pour gérer l'envoi du formulaire
function submitContact(event) {
    event.preventDefault(); // Empêche le rechargement de la page

    const name = document.getElementById('name').value;
    const email = document.getElementById('email').value;
    const message = document.getElementById('message').value;

    // Exemple d'envoi de message (remplacez par votre logique d'envoi)
    alert(`Nom: ${name}\nEmail: ${email}\nMessage: ${message}`);
    closeForm(); // Fermer le formulaire après soumission
}
 // Donnees de de ventes
   
const propertiesForSale = [
    { title: "Appartement à Bonapriso", price: "9 000 000 fcfa", rooms: 4 },
    { title: "Maison à Bonanjo", price: "4 500 000 fcfa", rooms: 7 },
    { title: "Maison à Akwa", price: "12 000 000 fcfa", rooms: 10 },
    { title: "Villa à Bonamoussadi", price: "16 200 000 fcfa", rooms: 12 },
    { title: "Studio à Kotto", price: "1 200 000 fcfa", rooms: 5 },
    { title: "Appartement à Dogbong", price: "400 000 fcfa", rooms: 7 },
];

const propertiesForRent = [
    { title: "Bureau à Bonapriso", price: "80 000 fcfa", rooms: 2 },
    { title: "Maison à Makepe", price: "700 000 fcfa", rooms: 9 },
    { title: "Appartement à Akwa", price: "12 000 000 fcfa", rooms: 8 },
    { title: "Villa à Bonamoussadi", price: "3 000 000 fcfa", rooms: 14 },
    { title: "Chambre à Kotto", price: "50 000 fcfa", rooms: 2 },
    { title: "Appartement à Dogbong", price: "400 000 fcfa", rooms: 5 },
];

function filterProperties() {
    const propertyType = document.getElementById("property-type").value;
    const location = document.getElementById("location").value.toLowerCase();
    const priceRange = parseInt(document.getElementById("price-range").value);
    const rooms = parseInt(document.getElementById("rooms").value);

    let filteredProperties = [];

    if (propertyType === "vendre") {
        filteredProperties = propertiesForSale.filter(property => {
            return (location ? property.title.toLowerCase().includes(location) : true) &&
                   (priceRange ? parseInt(property.price.replace(/\D/g, '')) <= priceRange : true) &&
                   (rooms ? property.rooms >= rooms : true);
        });
    } else if (propertyType === "louer") {
        filteredProperties = propertiesForRent.filter(property => {
            return (location ? property.title.toLowerCase().includes(location) : true) &&
                   (priceRange ? parseInt(property.price.replace(/\D/g, '')) <= priceRange : true) &&
                   (rooms ? property.rooms >= rooms : true);
        });
    }

    displayProperties(filteredProperties);
}

function displayProperties(properties) {
    const modal = document.createElement("div");
    modal.className = "modal";

    const resultContainer = document.createElement("div");
    resultContainer.className = "result-container";

    if (properties.length === 0) {
        const errorMessage = document.createElement("p");
        errorMessage.innerText = "Aucune propriété ne correspond à votre recherche.";
        errorMessage.style.color = "red";
        resultContainer.appendChild(errorMessage);
    } else {
        properties.forEach(property => {
            const propertyDiv = document.createElement("div");
            propertyDiv.className = "property-result";
            propertyDiv.innerHTML = `<h3>${property.title}</h3><p>Prix: ${property.price} <br> ${property.rooms} pièces</p>`;
            resultContainer.appendChild(propertyDiv);

            // formulaire d'achat
            const form = document.createElement("form");
            form.className = "purchase-form";
            form.innerHTML = `
                <h4>Formulaire d'Achat</h4>
                <label for="name">Nom:</label>
                <input type="text" id="name" required>
                <label for="email">Email:</label>
                <input type="email" id="email" required>
                <label for="message">Message:</label>
                <textarea id="message" rows="3" required></textarea>
                <button type="submit">Envoyer</button>
            `;
            form.onsubmit = (e) => {
                e.preventDefault();
                alert("Formulaire soumis avec succès !");
                modal.remove(); // Fermeture de la fenêtre après  la soumission
            };
            resultContainer.appendChild(form);
        });
    }

    modal.appendChild(resultContainer);

    // Ajouter un bouton de fermeture
    const closeButton = document.createElement("button");
    closeButton.innerText = "Fermer";
    closeButton.className = "close-button";
    closeButton.onclick = () => modal.remove();
    modal.appendChild(closeButton);

    document.body.appendChild(modal);
}