<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" />
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="icon" type="image/png" href="image/logo.png">
    <link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KN IMMOBILIER</title>
</head>
<body>

    <nav class="menu">
        <header>
            <div class="logo">
                <p><span>KN</span>IMMOBILIER</p>
            </div>
            <ul class="main-menu">
                <li><a href="#">Accueil</a></li>
                <li><a href="#">Acheter</a></li>
                <li><a href="#">Vendre</a></li>
                <li><a href="#">Louer</a></li>
                <li><a href="#">Contactez-nous</a></li>
            </ul>
            <ul class="auth-menu">
                <li><a href="#">S'inscrire</a></li>
                <li><a href="#">Se connecter</a></li>
                <li><button class="button">Estimer mon bien</button></li>
            </ul>
        </header>
    </nav>

    <div class="container">
        <h1>Des maisons qui inspirent</h1>
        <p class="intro">Explorez nos propriétés exceptionnelles.</p>
    </div> 

    <section class="search-filters">
        <h2>Filtres de recherche</h2>
        <form id="searchForm">
            <input type="text" placeholder="Localisation" />
            <input type="number" placeholder="Prix Min (€)" />
            <input type="number" placeholder="Prix Max (€)" />
            <select>
                <option value="">Type de propriété</option>
                <option value="appartement">Appartement</option>
                <option value="maison">Maison</option>
                <option value="bureau">Bureau</option>
            </select>
            <button type="submit">Rechercher</button>
        </form>
    </section>

    <section class="properties-section">
        <h1>ANNONCES DE PROPRIÉTÉS</h1>
        <h3 class="section-title">Propriétés à vendre</h3>
        <div class="properties">
            <div class="property" data-title="Appartement à Bonapriso" data-price="9 000 000 fcfa">
                <img src="../photos/8.jpg" alt="Appartement à Bonapriso">
                <h3>Appartement à Bonapriso</h3>
                <p>Prix: 9 000 000 fcfa <br>4 pièces</p>
                <i class="fas fa-heart favorite-icon" onclick="toggleFavorite('Appartement à Bonapriso', '9 000 000 fcfa')"></i>
                <button onclick="openVirtualTour('https://example.com/virtual-tour-bonapriso')">Visite Virtuelle</button>
            </div>
            <!-- Ajoutez d'autres propriétés ici -->
        </div>
        <h3 class="section-title">Propriétés à louer</h3>
        <div class="properties">
            <div class="property" data-title="Bureau à Bonapriso" data-price="80 000 fcfa">
                <img src="../photos/32.webp" alt="Bureau à Bonapriso">
                <h3>Bureau à Bonapriso</h3>
                <p>Prix: 80 000 fcfa <br>2 pièces</p>
                <i class="fas fa-heart favorite-icon" onclick="toggleFavorite('Bureau à Bonapriso', '80 000 fcfa')"></i>
                <button onclick="openVirtualTour('https://example.com/virtual-tour-bureau')">Visite Virtuelle</button>
            </div>
            <!-- Ajoutez d'autres propriétés ici -->
        </div>
    </section>

    <section class="comparison-section">
        <h2>Comparer les Propriétés</h2>
        <button onclick="compareProperties()">Comparer</button>
        <div id="comparison-container"></div>
    </section>

    <section class="alert-section">
        <h2>Alertes de Nouvelles Propriétés</h2>
        <form id="alertForm">
            <input type="email" placeholder="Votre email" required />
            <button type="submit">S'inscrire</button>
        </form>
        <p id="alert-message"></p>
    </section>

    <section class="map-section">
        <h2>Carte des Propriétés</h2>
        <div id="map" style="height: 400px;"></div>
    </section>

    <section class="gallery">
        <h2>Notre Galerie</h2>
        <div class="gallery-images">
            <div class="gallery-item">
                <img src="../photos/27.jpg" alt="Bonapriso">
                <p>Bonapriso</p>
            </div>
            <!-- Ajoutez d'autres images de la galerie ici -->
        </div>
    </section>

    <div class="info-box">
        <p>PRIX DE L'IMMOBILIER</p>
        <p>ACHETER DU NEUF</p>
        <p>OPPORTUNITÉS D'INVESTISSEMENT</p>
    </div>

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
                <p>Email: <a href="mailto:enzolord366@gmail.com">enzolord366@gmail.com</a></p>
                <p>Téléphone: <a href="tel:693707794">+237 693707794</a></p>
            </div>
            <div class="footer-section">
                <h4>Suivez-nous</h4>
                <div class="social-icons">
                    <a href="https://www.facebook.com" class="social-icon"><i class="fab fa-facebook-f"></i></a>
                    <a href="https://twitter.com" class="social-icon"><i class="fab fa-twitter"></i></a>
                    <a href="https://www.instagram.com" class="social-icon"><i class="fab fa-instagram"></i></a>
                    <a href="https://wa.me/693707794" target="_blank" class="social-icon"><i class="fab fa-whatsapp"></i></a>
                    <a href="mailto:enzolord366@gmail.com" class="social-icon"><i class="fas fa-envelope"></i></a>
                </div>
            </div>
            <div class="footer-section">
                <h4>À Propos</h4>
                <p><a href="#">Qui sommes-nous ?</a></p>
                <p><a href="#">Contacter le service client</a></p>
                <p><a href="#">Nous rejoindre</a></p>
                <p><a href="#">Presse</a></p>
            </div>
            <div class="footer-section">
                <h3>Mes Favoris</h3>
                <div id="favorites-container"></div>
                <i class="fas fa-star favorite-modal-icon" onclick="openFavorites()"></i>
                <div id="favorites-modal" class="modal">
                    <div class="modal-content">
                        <span class="close" onclick="closeFavorites()">&times;</span>
                        <h3>Mes Favoris</h3>
                        <div id="favorites-container"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <p>&copy; Réalisé par <span class="kn">KN</span>IMMOBILIER Tous droits réservés.</p>
        </div>
    </footer>

    <script>
        // Initialisation de la carte
        const map = L.map('map').setView([4.0511, 9.7085], 13); // Coordonnées de Bonapriso

        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            maxZoom: 19,
            attribution: '© OpenStreetMap'
        }).addTo(map);

        // Ajout de marqueurs (exemple)
        L.marker([4.0511, 9.7085]).addTo(map).bindPopup('Appartement à Bonapriso').openPopup();

        function openVirtualTour(url) {
            window.open(url, '_blank'); // Ouvre la visite virtuelle dans un nouvel onglet
        }

        function compareProperties() {
            const selectedProperties = Array.from(document.querySelectorAll('.property input:checked'));
            const comparisonContainer = document.getElementById('comparison-container');
            comparisonContainer.innerHTML = ''; // Réinitialiser le conteneur
            if (selectedProperties.length === 0) {
                comparisonContainer.innerHTML = '<p>Aucune propriété sélectionnée pour la comparaison.</p>';
                return;
            }
            selectedProperties.forEach(property => {
                const title = property.closest('.property').dataset.title;
                const price = property.closest('.property').dataset.price;
                const propertyDiv = document.createElement('div');
                propertyDiv.innerHTML = `<h4>${title}</h4><p>Prix: ${price}</p>`;
                comparisonContainer.appendChild(propertyDiv);
            });
        }

        document.getElementById('alertForm').addEventListener('submit', function(event) {
            event.preventDefault();
            const email = event.target.querySelector('input[type="email"]').value;
            document.getElementById('alert-message').innerText = `Vous êtes inscrit pour recevoir des alertes à ${email}.`;
            event.target.reset(); // Réinitialiser le formulaire
        });

        function openFavorites() {
            const modal = document.getElementById('favorites-modal');
            modal.style.display = 'block';
            displayFavorites(); // Afficher les favoris lors de l'ouverture
        }

        function closeFavorites() {
            const modal = document.getElementById('favorites-modal');
            modal.style.display = 'none';
        }

        window.onclick = function(event) {
            const modal = document.getElementById('favorites-modal');
            if (event.target === modal) {
                modal.style.display = 'none';
            }
        }

        function toggleFavorite(title, price) {
            let favorites = JSON.parse(localStorage.getItem('favorites')) || [];
            const icon = event.target;
            const index = favorites.findIndex(fav => fav.title === title);
            if (index > -1) {
                favorites.splice(index, 1);
                icon.classList.remove('favorited');
                alert(`${title} a été retiré de vos favoris.`);
            } else {
                favorites.push({ title, price });
                icon.classList.add('favorited');
                alert(`${title} a été ajouté à vos favoris.`);
            }
            localStorage.setItem('favorites', JSON.stringify(favorites));
        }

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

        window.onload = displayFavorites;
    </script>
</body>
</html>
