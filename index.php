<?php
 include('backend/enregistrer.php')
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>Enregistrer un participant</title>
</head>
 <style>
    /* Ajoutez des styles personnalisés ici si nécessaire */
.container {
    max-width: 600px;
}

.form-group {
    margin-bottom: 20px;
}

.btn-primary {
    background-color: #007bff;
    border-color: #007bff;
}

.btn-primary:hover {
    background-color: #0056b3;
    border-color: #0056b3;
}

h1 {
    text-align: center;
    text-align: center;
}

/* Styles pour le formulaire de manière à ce qu'il soit centré */
.form-container {
    display: flex;
    flex-direction: column;
    align-items: center;
}

 </style>
<body>
    <div class="container mt-5">
        <h1 class="mb-4">Enregistrer un participant</h1>
        <form action="backend/enregistrer.php" method="POST">
            <div class="form-group">
                <label for="nom">Nom :</label>
                <input type="text" class="form-control" id="nom" name="nom" required>
            </div>

            <div class="form-group">
                <label for="prenom">Prénom :</label>
                <input type="text" class="form-control" id="prenom" name="prenom" required>
            </div>

            <div class="form-group">
                <label for="telephone">Téléphone :</label>
                <input type="text" class="form-control" id="telephone" name="telephone" required>
            </div>

            <div class="form-group">
                <label for="email">Adresse email :</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>

            <button type="submit" class="btn btn-primary">Enregistrer</button>
        </form>
    </div>
    

    <!-- Inclure les fichiers JavaScript Bootstrap (jQuery et Popper.js) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>