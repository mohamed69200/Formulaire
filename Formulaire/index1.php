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
            <li><a href="#inscription-course">Inscription Course</a></li>
            <li><a href="#maintenance-karts">Maintenance Karts</a></li>
        </ul>
    </nav>

    <main>
        <section id="inscription-pilote">
            <h2>Inscription Pilote</h2>
            <img src="pilote_image.jpg" alt="Image de pilote" style="width: 200px; height: auto; float: left; margin-right: 20px;">
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
        
        

        


        <section id="maintenance-karts">
            <h2>Maintenance des Karts</h2>
            <!-- Formulaire de maintenance des karts -->
            <p>Formulaire de maintenance des karts ici...</p>
        </section>
    </main>


    <footer>
        <p>&copy; 2024 Gestion de Kart. Tous droits réservés.</p>
    </footer>
</body>
</html>
