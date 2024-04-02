<?php
// Paramètres de connexion à la base de données
$servername = "localhost"; // Adresse du serveur
$username = "root"; // Nom d'utilisateur
$password = "sn"; // Mot de passe
$database = "Karting"; // Nom de la base de données

// Créer une connexion à la base de données
$conn = new mysqli($servername, $username, $password, $database);

// Vérifier la connexion
if ($conn->connect_error) {
    die("La connexion à la base de données a échoué : " . $conn->connect_error);
} else {
    echo "Connexion réussie à la base de données";
}

// Ici, vous pouvez exécuter des requêtes SQL ou effectuer d'autres opérations sur la base de données

// Fermer la connexion à la base de données lorsque vous avez terminé

?>
