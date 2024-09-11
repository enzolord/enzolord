<?php
// Connexion à la base de données
$servername = "localhost";
$username = "root"; // Remplacez par votre utilisateur DB
$password = ""; // Remplacez par votre mot de passe DB
$dbname = "users"; // Remplacez par le nom de votre base de données

// Créer la connexion
$conn = new mysqli($servername, $username, $password, $dbname);

// Vérifier la connexion
if ($conn->connect_error) {
    die("Échec de la connexion : " . $conn->connect_error);
}

// Vérifier si le formulaire est soumis
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $conn->real_escape_string($_POST['email']);
    $password = $_POST['password'];

    // Préparer et exécuter la requête pour vérifier les informations d'identification
    $sql = "SELECT password FROM users WHERE email='$email'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        if (password_verify($password, $row['password'])) {
            echo "Connexion réussie !";

            // Vous pouvez également démarrer une session ici et rediriger l'utilisateur vers une autre page
            session_start();
            $_SESSION['email'] = $email;
            header("Location: ../../dashboard/index.php");; // Redirection vers le tableau de bord ou une autre page protégée
            exit();
        } else {
            echo "Mot de passe incorrect.";
        }
    } else {
        echo "Aucun utilisateur trouvé avec cet email.";
    }

    $conn->close();
}
?>
