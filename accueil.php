<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" />
    <link rel="stylesheet" type="text/css" href="styles/accueil.css">
	<link rel="icon" type="img" href="image/logo.png">
    <link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">


    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KN IMMOBILIER</title>
    <style>
            .table-container {
            display: flex;
            border: 1px solid #ddd;
            border-radius: 5px;
            overflow: hidden;
            width: 100%;
            max-width: 600px; /* Ajustez la largeur selon vos besoins */
            margin: auto;
        }
        .table-item {
            flex: 1;
            padding: 15px;
            text-align: center;
            background-color: #f9f9f9;
            border-right: 1px solid #ddd;
            text-decoration: none;
            color: #007BFF;
            font-weight: bold;
        }
        .table-item:last-child {
            border-right: none;
        }
        .table-item:hover {
            background-color: #f1f1f1;
            text-decoration: none;
        }
               /* Styles pour les icônes et le prix */
               .icon {
            font-size: 24px; /* Taille des icônes */
            color: #007bff; /* Couleur des icônes */
            cursor: pointer;
            margin-right: 10px;
        }
        
        .price {
            font-size: 20px; /* Taille du prix */
            color: #007bff; /* Couleur du prix */
        }

        .popup-image {
            width: 100%; /* Ajustez la largeur de l'image */
            max-width: 200px; /* Largeur maximale de l'image */
            height: auto; /* Hauteur automatique pour conserver les proportions */
            display: block;
            margin-bottom: 10px;
        }
    </style>
</head>

<body>

    	
	<nav class="menu" id="ax">
	<header>
		<div class="logo">
            <p><span>KN</span>IMMOBILIER</p>
        </div>

        <div class="menu">
        <ul class="men">
            <li><a href="accueil.html" class="">Accueil</a></li>
            
            <li><a href="Acheter.html" class="">Acheter</a></li>
            
            <li><a href="#" class="">Vendre</a></li>
            
            <li><a href="lou.html" class="">Louer</a></li>
            
            <li><a href="#" class="" onclick="openForm()">Contactez-nous</a></li>
     
        </ul>
    </div>
           <ul class="menu second-menu">
            <li><a href="connection.html">S'inscrire</a></li>
            <li><a href="connection.html">se connecter</a></li>
           <li> <button class="button"onclick="showEstimationForm()">Estimer mon bien</button></li>
   
           </ul>
           
           <div class="overla" id="overla" onclick="closeForm()">
            <div class="form-containe" id="form-containe">
                <form id="contact-form" onsubmit="submitContact(event)">
                    <h2>Contactez-nous</h2>
                    <label for="name">Nom :</label>
                    <input type="text" id="name" required placeholder="Votre nom">
    
                    <label for="email">Email :</label>
                    <input type="email" id="email" required placeholder="Votre email">
    
                    <label for="message">Message :</label>
                    <textarea id="message" required placeholder="Votre message" rows="4"></textarea>
    
                    <button type="submit">Envoyer</button>
                </form>
            </div>
        </div>
   
</head>
<body>




</head>
<body>








<script>
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
           </script>
    </header>	
	</nav>


    <div class="container">
        <h1>Votre avenir commence ici</h1>
        <p class="para">Trouvez la maison idéale avec notre aide.</p>
        <div class="recherche">
       <div class="rasa">  

        <div class="table-container">
            <a href="https://www.example.com/page1" class="table-item">Acheter</a>
            <a href="https://www.example.com/page2" class="table-item">Louer</a>
            <a href="https://www.example.com/page3" class="table-item">Vendre</a>
        </div>
        </div>  
       
    <div class="filter-bar">
        <div class="filter-item">
            <label for="property-type">Type de propriété</label>
            <select id="property-type">
                <option value="">Tous</option>
                <option value="maison">Maison</option>
                <option value="appartement">Appartement</option>
                <option value="terrain">Terrain</option>
                <option value="bureau">Bureau</option>
            </select>
        </div>
        <div class="filter-item">
            <label for="location">Emplacement</label>
            <input type="text" id="location" placeholder="Ville ou code postal" />
        </div>
        <div class="filter-item">
            <label for="price-range">Plage de prix</label>
            <input type="text" id="price-range" placeholder="Prix max" />
        </div>
        <div class="filter-item">
            <label for="rooms">Nombre de pièces</label>
            <input type="text" id="rooms" placeholder="Nombre de pièces">
        </div>
        <div class="filter-item">
            <label for="amenities">Commodités</label>
            <select id="amenities">
                <option value="">Aucune</option>
                <option value="wifi">Wi-Fi</option>
                <option value="parking">Parking</option>
                <option value="piscine">Piscine</option>
                <option value="jardin">Jardin</option>
            </select>
        </div>
        <button class="filter-button" onclick="filterProperties()">Rechercher</button>
    </div>
        </div>
    </div>
    
    <div class="services">
        <h3 class="se">LES SERVICES PROPOSES PAR <span class="kn">KN</span>IMMOBILIER</h3>
        <div class="content-box">
            <div class="card">
                <h4><i class="fas fa-compass"></i> <br>Guide</h4>
                <p class="p">Nous vous guidons sur vos projets d'immobilier et sur les déménagements et emménagements.</p>
            </div>
            <div class="card">
                <h4><i class="fas fa-calculator"></i> <br> Estimation de biens</h4>
                <p class="p">Estimation des biens à travers les positions, la commodité et l'état des biens.</p>
            </div>
            <div class="card">
                <h4><i class="fas fa-landmark"></i> <br> Ventes de terrains</h4>
                <p class="p">Nous vous proposons des terrains moins chers ou chers selon le lieu.</p>
            </div>
            <div class="card">
                <h4><i class="fas fa-home"></i> <br> Vente des biens immobiliers</h4>
                <p class="p">Nous vous proposons des biens immo pour un séjour ou pour y rester.</p>
            </div>
            <div class="card">
                <h4><i class="fas fa-calculator"></i> <br> Calculatrice Financière</h4>
                <p class="p">Outils pour calculer les hypothèques, les coûts et les prêts de rénovation.</p>
            </div>
            <div class="card">
                <h4><i class="fas fa-exchange-alt"></i> <br> Comparaisons des biens</h4>
                <p class="p">Fonctionnalités permettant de comparer plusieurs propriétés côte à côte.</p>
            </div>
        </div>

      
    <h1 style="text-align: center;">Carte Interactive des Propriétés <br> à Vendre ou à Louer</h1>
    <div id="map"></div><input type="text" id="location" placeholder="Rechercher un quartier ou une localisation">
    <button onclick="searchLocation()">Rechercher</button>
   
   <script src="https://cdnjs.cloudflare.com/ajax/libs/leaflet/1.9.4/leaflet.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/leaflet-routing-machine/3.2.12/leaflet-routing-machine.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/leaflet-control-geocoder/1.13.0/Control.Geocoder.js"></script>
    <script>
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

    </script>
 <!--   <section class="calculator-section">
        <h2>Calculatrice Financière</h2>
        <form id="loanCalculator">
            <div>
                <label for="amount">Montant du prêt (€):</label>
                <input type="number" id="amount" required>
            </div>
            <div>
                <label for="interest">Taux d'intérêt (%):</label>
                <input type="number" id="interest" step="0.01" required>
            </div>
            <div>
                <label for="years">Durée du prêt (années):</label>
                <input type="number" id="years" required>
            </div>
            <button type="button" onclick="calculateLoan()">Calculer</button>
        </form>
        <h3 id="result"></h3>
    </section>
    
    <style>
        .calculator-section {
            margin: 20px 0;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }
    
        .calculator-section input {
            width: calc(100% - 20px);
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
    
        .calculator-section button {
            background-color: #007bff;
            color: white;
            border: none;
            padding: 10px 15px;
            border-radius: 4px;
            cursor: pointer;
            transition: background 0.3s;
        }
    
        .calculator-section button:hover {
            background-color: #0056b3;
        }
    </style>
    -->
    <script>
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

    </script>
     <h1>ANNONCES DE PROPRIETES</h1>
    <h3 class="ser">Propriétés à vendre </h3>
    <section class="properties">   
        
        <div class="property" onclick="showForm()">
            <img src="../photos/8.jpg" alt="Propriété 1">
            <h3>Appartement à Bonapriso</h3>
            <p>Prix: 9 000 000 fcfa  <br> 4pieces</p>
            <i class="fas fa-heart favorite-icon" onclick="toggleFavorite('Appartement à Bonapriso', '9 000 000 fcfa')"></i>

        </div>
        <div class="property" onclick="showForm()">
            <img src="../photos/fontstyle/13.jpg" alt="Propriété 2">
            <h3>Maison à Bonanjo</h3>
            <p>Prix: 4 500 000 fcfa <br>7pieces</p>
            <i class="fas fa-heart favorite-icon" onclick="toggleFavorite('Appartement à Bonapriso', '9 000 000 fcfa')"></i>

        </div>
        <div class="property" onclick="showForm()">
            <img src="../photos/fontstyle/1.jpg" alt="Propriété 3">
            <h3>Maison à Akwa</h3>
            <p>Prix: 12 000 000 fcfa <br>10pieces</p>
            <i class="fas fa-heart favorite-icon" onclick="toggleFavorite('Maison à Akwa', '12 000 000 fcfa')"></i>

        </div>
        <div class="property" onclick="showForm()">
            <img src="../photos/fontstyle/7.jpg" alt="Propriété 4">
            <h3>Villa à Bonamoussadi</h3>
            <p>Prix: 16 200 000 fcfa <br>12</p>
            <i class="fas fa-heart favorite-icon" onclick="toggleFavorite('Villa à Bonamoussadi', '16 200 000 fcfa')"></i>

        </div>
        <div class="property" onclick="showForm()">
            <img src="../photos/28.jpg" alt="Propriété 4">
            <h3>Studio à Kotto</h3>
            <p>Prix: 1 200 000 fcfa <br>5</p>
            <i class="fas fa-heart favorite-icon" onclick="toggleFavorite('Studio à Kotto', '1 200 000 fcfa ')"></i>

        </div>
        <div class="property" onclick="showForm()">
            <img src="../photos/24.jpg" alt="Propriété 4">
            <h3>Appartement à Dogbong</h3>
            <p>Prix: 400 000 fcfa <br>7pieces</p>
            <i class="fas fa-heart favorite-icon" onclick="toggleFavorite('Appartement à Dogbong', ' 400 000 fcfa  ')"></i>

        </div>
        </section>
        <h3 class="ser">Propriétés à Louer </h3>
        <section class="properties">
        
            <div class="property" onclick="showForm()">
                <img src="../photos/32.webp" alt="Propriété 1">
                <h3>Bureau à Bonapriso</h3>
                <p>Prix: 80 000 fcfa <br>2</p>
                <i class="fas fa-heart favorite-icon" onclick="toggleFavorite('Bureau à Bonapriso', ' 80 000 fcfa  ')"></i>

            </div>
            <div class="property" onclick="showForm()">
                <img src="../photos/44.jpg" alt="Propriété 2">
                <h3>Maison à Makepe</h3>
                <p>Prix:  700 000 fcfa <br>9pieces</p>
                <i class="fas fa-heart favorite-icon" onclick="toggleFavorite('Maison à Makepe', ' 700 000 fcfa  ')"></i>

            </div>
            <div class="property" onclick="showForm()">
                <img src="../photos/35.jpg" alt="Propriété 3">
                <h3>Appartement à Akwa</h3>
                <p>Prix: 12 000 000 fcfa <br>8pieces</p>
                <i class="fas fa-heart favorite-icon" onclick="toggleFavorite('Appartement à Akwa', ' 12 000 000 fcfa  ')"></i>

            </div>
            <div class="property" onclick="showForm()">
                <img src="../photos/6.jpg" alt="Propriété 4">
                <h3>Villa à Bonamoussadi</h3>
                <p>Prix:  3 000 000 fcfa <br>14pieces</p>
                <i class="fas fa-heart favorite-icon" onclick="toggleFavorite('Villa à Bonamoussadi', ' 3 000 000 fcfa  ')"></i>

            </div>
            <div class="property" onclick="showForm()">
                <img src="../photos/1.jpg" alt="Propriété 4">
                <h3>Chambre à Kotto</h3>
                <p>Prix:  50 000 fcfa 2pieces</p>
                <i class="fas fa-heart favorite-icon" onclick="toggleFavorite('Chambre à Kotto', '  50 000 fcfa  ')"></i>

            </div>
            <div class="property" onclick="showForm()">
                <img src="../photos/8.jpg" alt="Propriété 4">
                <h3>Appartement à Dogbong</h3>
                <p>Prix: 400 000 fcfa <br>5pieces</p>
                <i class="fas fa-heart favorite-icon" onclick="toggleFavorite('Appartement à Dogbong', '   400 000 fcfa  ')"></i>

    </div>
            </div>
            </section>
            <?php
    
    include 'include/actualiser.php';
    ?>
    <script>
        function fetchNewProperties() {
            var xhr = new XMLHttpRequest();
            xhr.open('GET', 'include/fetch_properties.php', true); // Pointage vers le fichier PHP qui renvoie les nouvelles propriétés
            xhr.onload = function() {
                if (xhr.status === 200) {
                    document.getElementById('property').innerHTML = xhr.responseText;
                }
            };
            xhr.send();
        }

        // Initialiser le premier appel
        fetchNewProperties();

        // Vérifier périodiquement s'il y a de nouvelles propriétés
        setInterval(fetchNewProperties, 5000); // Toutes les 5 secondes
    </script>
 <script>

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

    </script>
            <section class="gallery">
                <h1>Notre Galerie</h1>
                <div class="gallery_images">
                    
                    <div class="gallery_img">
                 <div class="image">
                       <img src="../photos/27.jpg"> 
                    </div>
                <div class="content">
                    <p style="font-size: large;">Bonapriso</p> 
                </div>
                </div>
        
                <div class="gallery_img">
                    <div class="image">
                          <img src="../photos/31.jpg"> 
                       </div>
                   <div class="content">
                       <p style="font-size: large;">Akwa</p>
                   </div>
                   </div>
        
                   <div class="gallery_img">
                    <div class="image">
                          <img src="../photos/41.jpg"> 
                       </div>
                   <div class="content">
                       <p style="font-size: large;">Bali</p>
                   </div>
                   </div>
        
                   
                <div class="gallery_img">
                    <div class="image">
                          <img src="../photos/43.jpg"> 
                       </div>
                   <div class="content">
                       <p style="font-size: large;">Bonanjo</p>
                   </div>
                   </div>
        
                   
                <div class="gallery_img">
                    <div class="image">
                          <img src="../photos/fontstyle/9.jpg"> 
                       </div>
                   <div class="content">
                       <p style="font-size: large;">Deido</p>
                   </div>
                   </div>
        
                   <div class="gallery_img">
                    <div class="image">
                          <img src="../photos/home-1622401_640.jpg"> 
                       </div>
                   <div class="content">
                       <p style="font-size: large;">Kotto</p>
                   </div>
                   </div>
            
            </div>
            </section>
            <div class="rt">
                <p class="par">PRIX DE L'IMMOBILIER</p><p class="par">ACHETER DU NEUF</p> <p class="par">OPPORTUNITES D'INVESTISSEMENT </p>
              </div>
<!-- Footer -->
<footer class="footer">
    <div class="footer-content">
        <div class="footer-section">
            <h4>Liens utiles</h4>
            <ul>
                <li><a href="#">Acheter</a></li>
                <li><a href="#">Louer</a></li>
                <li><a href="#">Vendre</a></li>
                <li><a href="#">Contact</a></li>
                <li><a href="#">À propos</a></li>
            </ul>
        </div>
        <div class="footer-section">
            <h4>Contact</h4>
            <p>Email: <a href="mailto:info@exemple.com">enzolord366@gmail.com</a></p>
            <p>Téléphone: <a href="tel:693707794">+237 693707794</a></p>
        </div>
        <div class="footer-section">
            <h4>Suivez-nous</h4>
            <div class="social-icons">
                <a href="https://www.facebook.com" class="social-icon">
                    <i class="fab fa-facebook-f"></i>
                </a>
                <a href="https://twitter.com"  class="social-icon">
                    <i class="fab fa-twitter"></i>
                </a>
                <a href="https://www.instagram.com"  class="social-icon">
                    <i class="fab fa-instagram"></i>
                </a>
                <a href="https://wa.me/693707794" target="_blank" class="social-icon">
                    <i class="fab fa-whatsapp"></i>
                </a>
                <a href="mailto:enzolord366@gmail.com" class="social-icon">
                    <i class="fas fa-envelope"></i>
                </a>
            </div>
        </div>
        <div class="footer-section">
            <h4>A Propos</h4>
            <p><a href="#">Qui sommes-nous ?</a></p>
                <p><a href="#">Contacter le service client</a></p>
                    <p><a href="#">Nous rejoindre</a></p>
                        <p><a href="#">Presse</a></p>
        </div>
        <div class="footer-section">           
              <h4>Mes Favoris</h4>  
                <!-- Icône pour ouvrir la fenêtre flottante -->
        <i class="fas fa-star favorite-modal-icon" onclick="openFavorites()"></i>
        </div>
        <!-- Fenêtre flottante pour afficher les favoris -->
        <div id="favorites-modal" class="modal">
            <div class="modal-content">
                <span class="close" onclick="closeFavorites()">&times;</span>
                <h3>Mes Favoris</h3>
                <div id="favorites-container"></div>
            </div>
        </div></div>
    </div>
    <div class="footer-bottom">
        <p>&copy; Realiser par  <span class="kn">KN</span>IMMOBILIER Tous droits réservés.</p>    </div>
</footer>
  <!-- Footer -->    

      
</body>
<script>
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
</script>

</style>



<style>

        .overlay {
            display: none; /* Masquer par défaut */
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.5);
            justify-content: center;
            align-items: center;
        }

        .form-container {
            background-color: #ffffff; /* Fond blanc pour le formulaire */
            border-radius: 10px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
            padding: 20px;
            width: 400px;
        }

        h2 {
            text-align: center;
            color: #007bff; /* Couleur bleue pour le titre */
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
            border: 2px solid #007bff; /* Bordure bleue */
            border-radius: 5px;
            box-sizing: border-box;
        }

        .result {
            margin-top: 20px;
            text-align: center;
            color: #333;
        }
    </style>



<div class="overlay" id="formOverlay" onclick="hideEstimationForm()">
    <div class="form-container" id="estimationFormContainer" onclick="event.stopPropagation();">
        <form id="estimationForm" onsubmit="processEstimation(event)">
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
        <div id="estimationResult" class="result"></div>
    </div>
</div>

<script>
    function showEstimationForm() {
        document.getElementById('formOverlay').style.display = 'flex';
    }

    function hideEstimationForm() {
        document.getElementById('formOverlay').style.display = 'none';
    }

    function processEstimation(event) {
        event.preventDefault(); // Empêche le rechargement de la page
        const propertyType = document.getElementById('property-type').value;
        const surface = parseFloat(document.getElementById('surface').value);
        const condition = document.getElementById('condition').value;
        const zone = document.getElementById('zone').value;

        let basePricePerM2;

        // Définir le prix au m² selon le type de bien
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

        // Ajustement du prix selon l'état du bien
        let conditionMultiplier;
        switch (condition) {
            case 'Neuf':
                conditionMultiplier = 1.2; // 20% de plus
                break;
            case 'Bon état':
                conditionMultiplier = 1.0; // Prix normal
                break;
            case 'À rénover':
                conditionMultiplier = 0.8; // 20% de moins
                break;
            default:
                alert('Veuillez sélectionner l\'état du bien.');
                return;
        }

        // Coefficient selon la zone
        let zoneMultiplier;
        switch (zone) {
            case 'Centre-ville':
                zoneMultiplier = 1.5; // 50% de plus
                break;
            case 'Banlieue':
                zoneMultiplier = 1.2; // 20% de plus
                break;
            case 'Rural':
                zoneMultiplier = 0.8; // 20% de moins
                break;
            default:
                alert('Veuillez sélectionner une zone.');
                return;
        }

        // Calcul de l'estimation
        const estimatedPrice = surface * basePricePerM2 * conditionMultiplier * zoneMultiplier;

        // Affichage du résultat
        document.getElementById('estimationResult').innerHTML = `
            <h3>Estimation</h3>
            <p>Le prix estimé pour votre ${propertyType} de ${surface} m² dans la zone ${zone} est de <strong>${estimatedPrice.toLocaleString('fr-FR', { style: 'currency', currency: 'XAF' })}</strong>.</p>
        `;
    }
</script>

</body>
</html>

</html>

