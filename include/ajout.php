<?php

// Configuration de la base de données
$db_host = "localhost";
$db_name = "users"; 
$db_user = "votre_utilisateur"; 
$db_password = "votre_mot_de_passe"; 

// Configuration du cache
$cache_driver = "memcached"; // Ou "redis"
$cache_host = "localhost";
$cache_port = 11211; // Pour Memcached, 6379 pour Redis
$cache_ttl = 3600; // Durée de vie du cache en secondes (1 heure)

// Fonction pour scraper un bien immobilier
function scraperBienImmobilier($url, $cache) {
    // Vérifier si les données sont dans le cache
    $cache_key = md5($url);
    $bien = $cache->get($cache_key);

    if ($bien === false) {
        // Inclure la librairie Simple HTML DOM Parser
        require_once 'simple_html_dom.php';

        // Obtenir le contenu HTML de l'URL
        $html = file_get_html($url);

        // Extraire les données du bien immobilier
        $nomBien = $html->find('h1', 0)->plaintext;
        $prix = $html->find('.prix', 0)->plaintext;
        $description = $html->find('.description', 0)->plaintext;
        $lieu = $html->find('.lieu', 0)->plaintext; // Supposons que le lieu est dans un élément avec la classe 'lieu'
        $photoUrl = $html->find('img.photo', 0)->src;

        // Nettoyer les données
        $nomBien = trim($nomBien);
        $prix = str_replace('€', '', $prix);
        $prix = floatval($prix);
        $description = trim($description);
        $lieu = trim($lieu);

        // Enregistrer les données dans le cache
        $bien = array(
            "nom" => $nomBien,
            "prix" => $prix,
            "description" => $description,
            "lieu" => $lieu, 
            "photo" => $photoUrl
        );
        $cache->set($cache_key, $bien, $cache_ttl); 
    }

    return $bien;
}

// Connexion à la base de données
try {
    $db = new PDO("mysql:host=$db_host;dbname=$db_name", $db_user, $db_password);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    echo "Erreur de connexion à la base de données : " . $e->getMessage();
    exit;
}

// Initialiser le cache
if ($cache_driver === "memcached") {
    $cache = new Memcached();
    $cache->addServer($cache_host, $cache_port);
} else if ($cache_driver === "redis") {
    $cache = new Redis();
    $cache->connect($cache_host, $cache_port);
} else {
    $cache = false; 
}

// Scraper les données des biens immobiliers
$urls = [
    "https://www.knimmobilier.com/bien/12345",
    "https://www.knimmobilier.com/bien/67890",
    // ... D'autres URLs ...
];

// Utiliser une boucle for pour une meilleure performance
for ($i = 0; $i < count($urls); $i++) {
    $url = $urls[$i];
    $bien = scraperBienImmobilier($url, $cache);

    // Insérer les données dans la base de données
    try {
        $sql = "INSERT INTO biens (nom, prix, description, lieu, photo) VALUES (:nom, :prix, :description, :lieu, :photo)";
        $stmt = $db->prepare($sql);
        $stmt->execute([
            ":nom" => $bien["nom"],
            ":prix" => $bien["prix"],
            ":description" => $bien["description"],
            ":lieu" => $bien["lieu"],
            ":photo" => $bien["photo"]
        ]);
        echo "Bien immobilier enregistré avec succès : $url\n";
    } catch(PDOException $e) {
        echo "Erreur d'insertion dans la base de données : " . $e->getMessage() . "\n";
    }
}

// ... Code pour afficher les annonces ... 

?>
<!DOCTYPE html>
<html>
<head>
    <title>Annonces Immobilières</title>
</head>
<body>

    <h1>Annonces Immobilières</h1>

    <?php foreach ($biens as $bien): ?>
        <div class="annonce">
            <img src="<?php echo $bien['photo']; ?>" alt="<?php echo $bien['nom']; ?>">
            <h2><?php echo $bien['nom']; ?></h2>
            <p>Prix: <?php echo $bien['prix']; ?> €</p>
            <p>Lieu: <?php echo $bien['lieu']; ?></p>
            <p>Description: <?php echo $bien['description']; ?></p>
        </div>
    <?php endforeach; ?>

</body>
</html>


