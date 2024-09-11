<?php
// Configuration de la connexion à la base de données
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "users";

// Créer une connexion
$conn = new mysqli($servername, $username, $password, $dbname);

// Vérifier la connexion
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fonction pour récupérer les nouveaux biens immobiliers
function get_new_properties($conn) {
    // Requête SQL pour vérifier les nouveaux biens
    $sql = "SELECT image, type, prix, description FROM biens WHERE datedecreation > DATE_SUB(NOW(), INTERVAL 5 MINUTE)";
    $result = $conn->query($sql);

    // Si de nouveaux biens sont trouvés, les afficher au format HTML
    if ($result->num_rows > 0) {
        $html = "";
        while ($row = $result->fetch_assoc()) {
            $html .= "<div class='property'>";
            $html .= "<img src='" . htmlspecialchars($row["image"]) . "' alt='" . htmlspecialchars($row["title"]) . "' width='200'>";
            $html .= "<h3>" . htmlspecialchars($row["type"]) . "</h3>";
            $html .= "<p>Prix: " . htmlspecialchars($row["prix"]) . " €</p>";
            $html .= "<p>" . htmlspecialchars($row["description"]) . "</p>";
            $html .= "</div>";
        }
        return $html;
    } else {
        return "";
    }
}

// Afficher les biens immobiliers existants
$existing_properties = get_new_properties($conn);
echo $existing_properties;

// Fermer la connexion à la base de données
$conn->close();
?>

<!-- section JavaScript pour les mises à jour périodiques -->
<script>
    function fetchNewProperties() {
        var xhr = new XMLHttpRequest();
        xhr.open('GET', 'fetch_properties.php', true);
        xhr.onload = function() {
            if (xhr.status === 200) {
                document.getElementById('properties').innerHTML = xhr.responseText;
            }
        };
        xhr.send();
    }

    // Initialiser le premier appel
    fetchNewProperties();

    // Vérifier périodiquement s'il y a de nouveaux biens
    setInterval(fetchNewProperties, 5000); // Toutes les 5 secondes
</script>

