<?php
//  pour éviter la duplication de code
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
    $sql = "SELECT image, type, prix, description FROM biens WHERE datedecreation > DATE_SUB(NOW(), INTERVAL 5 MINUTE)";
    $result = $conn->query($sql);

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

$existing_properties = get_new_properties($conn);
echo $existing_properties;

$conn->close();
?>
