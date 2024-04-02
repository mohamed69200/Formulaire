<?php
// Vérifier si le formulaire a été soumis
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Inclure le fichier de connexion à la base de données
    include 'connexion.php';

    // Récupérer les données du formulaire
    $date = $_POST['date'];
    $heure = $_POST['heure'];
    $lieu = $_POST['lieu'];
    $type_course = $_POST['type_course'];

    // Requête SQL d'insertion des données dans la table courses
    $sql = "INSERT INTO courses (DateHeureCourse, Lieu, TypeCourse) VALUES ('$date $heure', '$lieu', '$type_course')";

    // Exécuter la requête d'insertion
    if ($conn->query($sql) === TRUE) {
        echo "La course a été planifiée avec succès.";
    } else {
        echo "Erreur lors de la planification de la course : " . $conn->error;
    }

    // Fermer la connexion à la base de données
    $conn->close();

    // Redirection vers une page de confirmation ou une autre page appropriée
    header("Location: index1.php");
    exit();
} else {
    // Redirection vers la page précédente si le formulaire n'a pas été soumis
    header("Location: index1.php");
    exit();
}
?>
