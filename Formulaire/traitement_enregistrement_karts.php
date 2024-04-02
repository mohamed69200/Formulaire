<?php
// Vérifier si le formulaire a été soumis
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Inclure le fichier de configuration de la base de données
    include 'connexion.php';

    // Récupérer les données du formulaire
    $marque_modele = $_POST['marque_modele'];
    $annee_fabrication = $_POST['annee_fabrication'];
    $numero_serie = $_POST['numero_serie'];
    $date_achat = $_POST['date_achat'];
    $statut = $_POST['statut'];

    // Préparer la requête SQL d'insertion
    $sql = "INSERT INTO karts (MarqueModele, AnneeFabrication, NumeroSerie, DateAchat, Statut) 
            VALUES ('$marque_modele', '$annee_fabrication', '$numero_serie', '$date_achat', '$statut')";
    
    // Exécuter la requête SQL
    if ($conn->query($sql) === TRUE) {
        echo "Kart enregistré avec succès !";
    } else {
        echo "Erreur lors de l'enregistrement du kart : " . $conn->error;
    }

    // Fermer la connexion à la base de données
    $conn->close();
} else {
    // Redirection vers la page d'index si le formulaire n'a pas été soumis
    header("Location: index1.html");
    exit();
}
?>
