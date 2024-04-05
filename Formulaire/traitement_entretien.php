<?php
// Vérifier si le formulaire a été soumis
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupérer les données du formulaire
    $kartID = $_POST['kart'];
    $typeEntretien = $_POST['type_entretien'];
    $description = $_POST['description'];
    $coutEntretien = $_POST['cout'];
    $dateEntretien = $_POST['date_entretien'];
    $heuresFonctionnement = $_POST['heures_fonctionnement'];

    // Inclure le fichier de connexion à la base de données
    include 'connexion.php';

    try {
        // Préparer la requête SQL pour l'insertion des données dans la table entretiens
        $stmt = $conn->prepare("INSERT INTO entretiens (KartID, TypeEntretien, DateEntretien, CoutEntretien, DescriptionTravaux, HeuresFonctionnement) VALUES (?, ?, ?, ?, ?, ?)");

        // Liage des paramètres
        $stmt->bind_param("issssi", $kartID, $typeEntretien, $dateEntretien, $coutEntretien, $description, $heuresFonctionnement);

        // Exécution de la requête
        $stmt->execute();

        // Fermeture de la connexion et de l'instruction
        $stmt->close();
        $conn->close();

        // Redirection vers une page de confirmation ou une autre page appropriée
        header("Location: index1.php");
        exit();
    } catch (Exception $e) {
        // Gestion des erreurs - affichage ou journalisation
        echo "Erreur : " . $e->getMessage();
    }
} else {
    // Redirection vers la page précédente si le formulaire n'a pas été soumis
    header("Location: index1.php");
    exit();
}
?>
