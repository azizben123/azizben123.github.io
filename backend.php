<?php
$servername = "localhost"; // ou l'adresse IP du serveur si c'est à distance
$username = "root"; // Utilisateur MySQL
$password = "root"; // Mot de passe de l'utilisateur MySQL
$dbname = "stock"; // Nom de la base de données

// Créer la connexion
$conn = new mysqli($servername, $username, $password, $dbname);

// Vérifier la connexion
if ($conn->connect_error) {
    die("Connexion échouée : " . $conn->connect_error);
}
echo "<h1>Connexion réussie à la base de données</h1>";
?>