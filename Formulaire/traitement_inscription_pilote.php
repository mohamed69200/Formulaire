<?php
// Vérifier si le formulaire a été soumis
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    // Inclure le fichier de configuration de la base de données
    include 'connexion.php';

    // Récupérer les données du formulaire
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $date_naissance = $_POST['date_naissance'];
    $adresse = $_POST['adresse'];
    $telephone = $_POST['telephone'];
    $email = $_POST['email'];

    // Préparer la requête SQL d'insertion
    $sql = "INSERT INTO pilotes (Nom, Prenom, DateNaissance, Adresse, Telephone, Email) 
            VALUES ('$nom', '$prenom', '$date_naissance', '$adresse', '$telephone', '$email')";
    
      // Exécuter la requête SQL
      if ($conn->query($sql) === TRUE) {
        // Redirection vers la page de formulaire avec un message de succès
        header("Location: index1.php?success=1");
        exit();
    } else {
        echo "Erreur lors de l'inscription du pilote : " . $conn->error;
    }

    // Fermer la connexion à la base de données
  
} else {
    // Redirection vers la page d'index si le formulaire n'a pas été soumis
    header("Location: index1.php");
    exit();
}