<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Récupére les données du formulaire
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $telephone = $_POST['telephone'];
    $email = $_POST['email'];

    // Connectez-vous à la base de données (utilisez vos propres identifiants)
    $mysqli = new mysqli(
    'localhost',
    'root',
    '',
    'test_db');

    // Vérifiez la connexion
    if ($mysqli->connect_error) {
        die('Erreur de connexion à la base de données : ' . $mysqli->connect_error);
    }

    // Préparez la requête SQL pour insérer les données
    $sql = "INSERT INTO participants (nom, prenom, telephone, email) VALUES (?, ?, ?, ?)";
    $stmt = $mysqli->prepare($sql);

    // Liez les paramètres
    $stmt->bind_param("ssss", $nom, $prenom, $telephone, $email);

    // Exécute la requête
    if ($stmt->execute()) {
       // Rediriger vers une autre page après l'enregistrement réussi
       header("Location: consulter.php");
       exit;
    } else {
        echo "Erreur lors de l'enregistrement du participant : " . $stmt->error;
    }

    // Fermez la connexion à la base de données
    $stmt->close();
    $mysqli->close();
}
?>


