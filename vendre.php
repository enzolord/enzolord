<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" />
    <link rel="icon" type="image/png" href="image/logo.png">
    <link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KN IMMOBILIER</title>
    <style>/* Général */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
            color: #333;
        }
        
        .container {
    background-image: linear-gradient(rgba(0, 0, 0, 0.7) 50%, rgba(0, 0, 0, 0.7) 90%), url("../photos/51.jpg");
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat; 
    height: 100vh; 
    display: flex;
    flex-direction: column;
    justify-content: center; 
    align-items: center; 
    text-align: center; 
    color: white; 
}
        
        /* Navigation */
        .menu {
            background-color: #007bff;
            color: #fff;
        }
        
        .menu li {
    margin: 0 15px;
    list-style: none;
}

.menu li a {
    font-size: 14px;
    text-decoration: none; 
    color: #999;
    position: relative;
}

.menu li a::before,
.menu li a::after {
    position: relative;
    content: "";
    width: 0;
    height: 2px;
    border-radius: 6px;
    background-color:  rgb(43, 191, 228);
    transition: 0.5s;
}

.menu li a::before {
    top: -5px;
    left: 0;
}

.menu li a:hover::before {
    width: 100%;
}

.menu li a::after {
    bottom: -5px;
    right: 0;
}
.menu li a:hover {
    color:  rgb(43, 191, 228);
}
.main-menu{
    display: flex;
    font-weight: 700;
}    
    .auth-menu{
        display: flex;
        top: 10px;
        font-weight: 700;
    }    
        /* Section */
        h1, h2, h3 {
            color: #007bff;
        }
        
        .properties-section {
            margin: 20px 0;
        }
        .properties {
    display: grid;
    grid-template-columns: repeat(4, 1fr); /* 4 colonnes égales */
    gap: 20px; /* Espacement entre les éléments */
    justify-content: center;
    margin: 40px;
}


        .favorite-icon {
            cursor: pointer;
            color: #ff4081;
        }
        
       
        
        /* Formulaires */
      
        
        button:hover {
            background-color: #0056b3;
        }
        
        /* Footer */
        .footer {
            background-color: #007bff;
            color: #fff;
            padding: 20px 0;
        }
        
        .footer-content {
            display: flex;
            justify-content: space-between;
            padding: 0 20px;
        }
        
        .footer-section {
            flex: 1;
            margin: 0 10px;
        }
        
        .footer-section h4 {
            margin-bottom: 10px;
        }
        
        .footer-bottom {
            text-align: center;
            margin-top: 20px;
        }
        
        /* Modal */
        .modal {
            display: none;
            position: fixed;
            z-index: 1;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            overflow: auto;
            background-color: rgba(0, 0, 0, 0.5);
        }
        
        .modal-content {
            background-color: #fff;
            margin: 15% auto;
            padding: 20px;
            border: 1px solid #888;
            width: 80%;
            border-radius: 8px;
        }
        
        .close {
            color: #aaa;
            float: right;
            font-size: 28px;
            font-weight: bold;
        }
        
        .close:hover,
        .close:focus {
            color: black;
            text-decoration: none;
            cursor: pointer;
        }
        
        /* Gallery */
        .gallery {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
        }
        
        .gallery-item {
            flex: 1 1 calc(30% - 20px);
            margin: 10px;
            text-align: center;
        }
        
        .gallery-item img {
            width: 100%;
            border-radius: 8px;
        }
        /* En-tête */
header {
    display: flex;
    align-items: center;
    justify-content: space-between;
    height: 80px;
    padding: 0 5%;
    position: fixed;
    top: 0;
    left: 0;
    right: 0;
    background-color: rgba(255, 255, 255, 0.9);
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
    z-index: 10;
}

.logo {
    color: #007bff;;
    font-weight: 900;
    font-size: 35px;
}

.logo span {
    color: #273e60;
}

.menu {
    display: flex;
    margin-right: 20px;
}

.menu li {
    margin: 0 15px;
    list-style: none;
}

.menu li a {
    font-size: 14px;
    text-decoration: none; 
    color: #999;
    position: relative;
}

.menu li a:hover {
    color: rgb(43, 191, 228);
}
h1,h3,h2{
    text-align: center;
}

/* Pied de page */
.footer {
    background-color: #e9ecf1e1;
    color: #343a40;
    padding: 40px 20px;
    text-align: left;
    margin-top: 20px; /* Pour éviter le chevauchement avec le contenu */
}

.footer-content {
    display: flex;
    justify-content: space-between;
    flex-wrap: wrap;
    max-width: 1200px;
    margin: 30px auto;
}

.footer-section {
    flex: 1;
    margin: 10px;
}

.footer-section h4 {
    margin-bottom: 15px;
    font-weight: bold;
}

.footer-section ul {
    list-style-type: none;
    padding: 0;
}

.footer-section ul li a {
    text-decoration: none;
    color: #343a40;
    transition: color 0.3s;
}

.footer-section ul li a:hover {
    color: rgb(43, 191, 228);
}
.overlay {
    display: none; /* Caché par défaut */
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(0, 0, 0, 0.5); /* Fond semi-transparent */
    justify-content: center;
    align-items: center;
}

.form-container {
    background: #fff;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
    width: 100%;
    max-width: 500px; /* Largeur maximale pour le formulaire */
    box-sizing: border-box;
}

h2 {
    margin-top: 0;
    color: #007bff; /* Couleur du titre */
    font-size: 24px;
}

label {
    display: block;
    margin-top: 15px;
    font-weight: bold;
    color: #333;
}

select, input[type="number"], input[type="text"] {
    width: calc(100% - 20px); /* Largeur moins les marges */
    padding: 10px;
    margin-top: 5px;
    margin-bottom: 15px;
    border: 1px solid #ccc;
    border-radius: 4px;
    font-size: 16px;
}


        </style>
</head>
<body>

    <nav class="menu">
        <header>
            <div class="logo">
                <p><span>KN</span>IMMOBILIER</p>
            </div>
            <ul class="main-menu">
                <li><a href="accueil.html">Accueil</a></li>
                <li><a href="Acheter.html">Acheter</a></li>
                <li><a href="#">Vendre</a></li>
                <li><a href="lou.html">Louer</a></li>
                <li><a href="#">Contactez-nous</a></li>
            </ul>
            <ul class="auth-menu">
                <li><a href="#">S'inscrire</a></li>
                <li><a href="#">Se connecter</a></li>
                <li><button onclick="showEstimationForm()">Estimer mon bien</button>
                
                
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
            </li>
            </ul>
        </header>
    </nav>

    <div class="container">
        <h1>Des maisons qui inspirent</h1>
        <p class="intro">Explorez nos propriétés exceptionnelles.</p>
        <button onclick="getLocation()">Trouver ma position</button>
    </div> 
    <style>
        /* Styles CSS */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        #floating-window {
            position: fixed;
            bottom: 20px;
            right: 20px;
            width: 300px;
            background: #fff;
            border: 1px solid #ddd;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            z-index: 1000;
        }

        .floating-content {
            padding: 20px;
            text-align: center;
        }

        .floating-content h2 {
            margin-top: 0;
        }

        

        button:hover {
            background-color: #0056b3;
        }

        #close-btn {
            background-color: #dc3545;
        }

        #close-btn:hover {
            background-color: #c82333;
        }
      
    button {
            padding: 10px 20px;
            font-size: 16px;
            background-color: #007bff; /* Couleur bleue pour le bouton */
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        button:hover {
            background-color: #0056b3; /* Couleur plus foncée au survol */
        }

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

        .fom-container {
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

        button:hover {
            background-color: #0056b3; /* Couleur plus foncée au survol */
        }

        .result {
            margin-top: 20px;
            text-align: center;
            color: #333;
        }
    </style>
</head>
<body>
    <!-- Contenu de la page -->

    <!-- Fenêtre flottante -->
    <div id="floating-window">
        <div class="floating-content">
            <h2>Estimez votre bien immobilier !</h2>
            <p>Voulez-vous obtenir une estimation gratuite de votre bien immobilier ?</p>
            <button id="estimate-btn" onclick="showEstimationForm()">Estimer maintenant</button>
            <button id="close-btn">X</button>
        </div>
    </div>

    <script>
        // Code JavaScript
        document.addEventListener('DOMContentLoaded', () => {
            const closeBtn = document.getElementById('close-btn');
            const floatingWindow = document.getElementById('floating-window');

            closeBtn.addEventListener('click', () => {
                floatingWindow.style.display = 'none';
            });

            // Fonction pour le bouton d'estimation
            document.getElementById('estimate-btn').addEventListener('click', () => {
                // Code pour ouvrir un formulaire d'estimation ou rediriger l'utilisateur
            });
        });
    </script>







  



<section class="calculator-section">
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
</script>
    
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
        <div class="footer-section">            <h3>Mes Favoris</h3>
            <div id="favorites-container"></div>
            
                    <!-- Icône pour ouvrir la fenêtre flottante -->
            <i class="fas fa-star favorite-modal-icon" onclick="openFavorites()"></i>
            
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


    
</body>
</html>
