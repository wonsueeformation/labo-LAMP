<?php
$servername = "db";
$username = "app_user";
$password = "app_pass";
$dbname = "app_db";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Échec de connexion: " . $conn->connect_error);
}

echo "Connexion MySQL réussie<br>";
echo "Hello depuis le serveur LAMP avec Docker !";

$conn->close();
?>

