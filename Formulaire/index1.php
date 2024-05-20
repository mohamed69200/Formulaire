<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestion de Kart</title>
    <link rel="stylesheet" href="styles.css">
    <script>
        // Fonction pour masquer le message de succès après un certain délai
        setTimeout(() => {
            document.getElementById('success-message').style.display = 'none';
        }, 5000); // Masque le message après 5 secondes
    </script>
    
    
</head>
<body>
    <header>
        <img src="logo.png" alt="Logo de votre projet" id="logo">
        <h1>Gestion de Kart</h1>
    </header>


     <div id="success-message" style="background-color: lightgreen; padding: 10px; text-align: center;">
         Pilote inscrit avec succès !
     </div>
  

    <nav>
        <ul>
            <li><a href="#inscription-pilote">Inscription Pilote</a></li>
            <li><a href="#enregistrement-karts">Gestion Karts</a></li>
            <li><a href="#planification-courses">Suivi des Courses</a></li>
            <li><a href="#maintenance-karts">Maintenance Karts</a></li>
        </ul>
    </nav>

    <main>
    <section id="inscription-pilote">
        <h2>Inscription Pilote</h2>
        <div style="display: flex;">
            <div style="flex: 1;">
                <form action="traitement_inscription_pilote.php" method="post">
                    <label for="nom">Nom:</label>
                    <input type="text" id="nom" name="nom" required><br><br>

                    <label for="prenom">Prénom:</label>
                    <input type="text" id="prenom" name="prenom" required><br><br>

                    <label for="date_naissance">Date de Naissance:</label>
                    <input type="date" id="date_naissance" name="date_naissance" required><br><br>

                    <label for="adresse">Adresse:</label>
                    <input type="text" id="adresse" name="adresse" required><br><br>

                    <label for="telephone">Téléphone:</label>
                    <input type="tel" id="telephone" name="telephone" required><br><br>

                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email" required><br><br>

                    <!-- Autres champs d'inscription -->

                    <input type="submit" value="Inscrire le pilote">
                </form>
            </div>
            <div style="flex: 1; padding-left: 20px;">
                <h3>Nouveaux Pilotes Inscrits</h3>
                <?php
                // Inclure le fichier de connexion à la base de données
                include 'connexion.php';

                // Requête SQL pour récupérer les nouveaux pilotes inscrits
                $sql = "SELECT Nom, Prenom, DateNaissance, Adresse, Telephone, Email FROM pilotes ORDER BY PiloteID DESC LIMIT 5";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    echo "<table>";
                    echo "<tr><th>Nom</th><th>Prénom</th><th>Date de Naissance</th><th>Adresse</th><th>Téléphone</th><th>Email</th></tr>";
                    while ($row = $result->fetch_assoc()) {
                        echo "<tr>";
                        echo "<td>" . $row["Nom"] . "</td>";
                        echo "<td>" . $row["Prenom"] . "</td>";
                        echo "<td>" . $row["DateNaissance"] . "</td>";
                        echo "<td>" . $row["Adresse"] . "</td>";
                        echo "<td>" . $row["Telephone"] . "</td>";
                        echo "<td>" . $row["Email"] . "</td>";
                        echo "</tr>";
                    }
                    echo "</table>";
                } else {
                    echo "Aucun pilote inscrit récemment.";
                }

                // Fermer la connexion à la base de données
                $conn->close();
                ?>
            </div>
        </div>
    </section>

        <section id="enregistrement-karts">
            <h2>Enregistrement des Karts</h2>
             <!-- Image de kart -->
            <img src="kart_image.png" alt="Image de kart" style="width: 200px; height: auto; float: left; margin-right: 20px;">
            <form action="traitement_enregistrement_karts.php" method="post">
                <label for="marque_modele">Marque et Modèle :</label>
                <input type="text" id="marque_modele" name="marque_modele" required><br><br>
                
                <label for="annee_fabrication">Année de Fabrication :</label>
                <input type="text" id="annee_fabrication" name="annee_fabrication" required><br><br>
                
                <label for="numero_serie">Numéro de Série :</label>
                <input type="text" id="numero_serie" name="numero_serie" required><br><br>
                
                <label for="date_achat">Date d'Achat :</label>
                <input type="date" id="date_achat" name="date_achat" required><br><br>
                
                <label for="statut">Statut :</label>
                <input type="text" id="statut" name="statut" required><br><br>
                
                <!-- Ajoutez d'autres champs si nécessaire -->
                
                <input type="submit" value="Enregistrer Kart">
            </form>
        </section>
        
        
      
        <section id="planification-courses">
            <h2>Planification des Courses</h2>
            <div style="display: flex;">
                <div style="flex: 1;">
                    <form action="traitement_planification_courses.php" method="post">
                        <label for="date">Date :</label>
                        <input type="date" id="date" name="date" required><br><br>
                        
                        <label for="heure">Heure :</label>
                        <input type="time" id="heure" name="heure" required><br><br>
                        
                        <label for="lieu">Lieu :</label>
                        <input type="text" id="lieu" name="lieu" required><br><br>
                        
                        <label for="type_course">Type de Course :</label>
                        <select id="type_course" name="type_course">
                            <option value="course_libre">Course Libre</option>
                            <option value="competition">Compétition</option>
                            <!-- Ajoutez d'autres options si nécessaire -->
                        </select><br><br>
                        
                        <input type="submit" value="Planifier Course">
                    </form>
                </div>
                <div style="flex: 1;">
                    <img src="image_course.png" alt="Image de course" style="max-width: 100%;">
                </div>
            </div>
        </section>
        
        

        


        <main>
    <section id="maintenance-karts">
        <h2>Maintenance des Karts</h2>
        <div style="display: flex;">
            <div style="flex: 1;">
                <form action="traitement_entretien.php" method="post">
                    <label for="kart">Kart à entretenir:</label>
                    <select id="kart" name="kart" required>
                    <?php
                    // Inclure le fichier de connexion à la base de données
                    include 'connexion.php';

                    // Requête SQL pour récupérer les karts existants
                    $sql = "SELECT KartID, MarqueModele FROM karts";
                    $result = $conn->query($sql);

                    // Vérifier si des résultats ont été trouvés
                    if ($result->num_rows > 0) {
                        // Parcourir les résultats et créer des options pour chaque kart
                        while ($row = $result->fetch_assoc()) {
                            echo "<option value='" . $row['KartID'] . "'>" . $row['MarqueModele'] . "</option>";
                        }
                    } else {
                        echo "<option value='' disabled>Aucun kart trouvé</option>";
                    }

                    // Fermer la connexion à la base de données
                    $conn->close();
                    ?>
                </select><br><br>

                    <label for="type_entretien">Type d'entretien:</label>
                    <select id="type_entretien" name="type_entretien" required>
                        <option value="entretien_preventif">Entretien préventif</option>
                        <option value="reparation">Réparation</option>
                        <!-- Ajoutez d'autres options si nécessaire -->
                    </select><br><br>

                    <label for="description">Description des travaux:</label><br>
                    <textarea id="description" name="description" rows="4" cols="50" required></textarea><br><br>

                    <label for="cout">Coût de l'entretien:</label>
                    <input type="number" id="cout" name="cout" required><br><br>

                    <label for="date_entretien">Date de l'entretien:</label>
                    <input type="date" id="date_entretien" name="date_entretien" required><br><br>

                    <input type="submit" value="Enregistrer Entretien">
                </form>
            </div>
            <div style="flex: 1;">
                <img src="image_entretien.jpg" alt="Image d'entretien" style="max-width: 60%;">
            </div>
        </div>
    </section>
  
    <h1>Détails de la participation</h1>
    <section id="affichage-participation">
    <?php
// Inclure le fichier de connexion à la base de données
include 'connexion.php';

// Requête SQL pour récupérer les détails de participation
$sql = "SELECT p.ParticipationID, pil.Nom AS NomPilote, k.MarqueModele AS Kart, c.DateHeureCourse AS Course, p.PositionFinale, p.TempsCourse, p.ToursEffectues, p.PointsGagnes, p.Statut 
FROM participation p 
JOIN pilotes pil ON p.PiloteID = pil.PiloteID 
LEFT JOIN karts k ON p.KartID = k.KartID 
LEFT JOIN courses c ON p.CourseID = c.CourseID 
LIMIT 0, 25";
$result = $conn->query($sql);

    // Vérifier si des résultats ont été trouvés
    if ($result->num_rows > 0) {
        // Afficher les détails de participation
        echo "<table>";
        echo "<tr><th>ID Participation</th><th>Nom Pilote</th><th>Kart</th><th>Course</th><th>Position Finale</th><th>Temps de Course</th><th>Tours Effectués</th><th>Points Gagnés</th><th>Statut</th></tr>";
        while ($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $row['ParticipationID'] . "</td>";
            echo "<td>" . $row['NomPilote'] . "</td>";
            echo "<td>" . $row['Kart'] . "</td>";
            echo "<td>" . $row['Course'] . "</td>";
            echo "<td>" . $row['PositionFinale'] . "</td>";
            echo "<td>" . $row['TempsCourse'] . "</td>";
            echo "<td>" . $row['ToursEffectues'] . "</td>";
            echo "<td>" . $row['PointsGagnes'] . "</td>";
            echo "<td>" . $row['Statut'] . "</td>";
            echo "</tr>";
        }
        echo "</table>";
    } else {
        echo "Aucune participation trouvée.";
    }

    // Fermer la connexion à la base de données
    $conn->close();
    ?>

    

</main>

    <footer>
        <p>&copy; 2024 Gestion de Kart. Tous droits réservés.</p>
    </footer>
</body>
</html>
