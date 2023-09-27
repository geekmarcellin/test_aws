
<!DOCTYPE html>
<html>
<head>
    <title>Liste des Participants</title>
    <!-- Inclure les fichiers CSS Bootstrap pour la mise en forme du tableau -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h1>Liste des Participants</h1>
        <table class="table">
            <thead>
                <tr>
                    <th>Nom</th>
                    <th>Prénom</th>
                    <th>Téléphone</th>
                    <th>Email</th>
                </tr>
            </thead>
            <tbody>
               <?php
            
                // Connexion à la base de données (à personnaliser)
                $mysqli = new mysqli('localhost', 'root', '', 'test_db');

                // Vérification de la connexion
                if ($mysqli->connect_error) {
                    die('Erreur de connexion à la base de données : ' . $mysqli->connect_error);
                }

                // Récupération des participants depuis la base de données
                $query = "SELECT nom, prenom, telephone, email FROM participants";
                $result = $mysqli->query($query);

                // Affichage des participants dans le tableau
                while ($row = $result->fetch_assoc()) {
                    echo '<tr>';
                    echo '<td>' . $row['nom'] . '</td>';
                    echo '<td>' . $row['prenom'] . '</td>';
                    echo '<td>' . $row['telephone'] . '</td>';
                    echo '<td>' . $row['email'] . '</td>';
                    echo '</tr>';
                }

                // Fermeture de la connexion à la base de données
                $mysqli->close();
                ?>
            </tbody>
        </table>
    </div>

    <!-- Inclure les fichiers JavaScript Bootstrap (jQuery et Popper.js) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
