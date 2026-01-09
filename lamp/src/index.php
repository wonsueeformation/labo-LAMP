<?php
$servername = "db";
$username   = "app_user";
$password   = "app_pass";
$dbname     = "app_db";

// Connexion à MySQL
$conn = new mysqli($servername, $username, $password, $dbname);

// Vérification de la connexion
if ($conn->connect_error) {
    die("Échec de connexion : " . $conn->connect_error);
}

// Messages de succès
echo "Connexion MySQL réussie<br>";
echo "Hello depuis le serveur LAMP avec Docker !";

// Fermeture de la connexion
$conn->close();
?>

