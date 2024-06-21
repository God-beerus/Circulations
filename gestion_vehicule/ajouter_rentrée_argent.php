<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajouter une Rentrée d'Argent</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
            color: #343a40;
            margin: 0;
            padding: 20px;
        }
        .container {
            max-width: 600px;
            margin: 50px auto;
            background-color: #fff;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
        }
        h1 {
            text-align: center;
            color: #007bff;
            margin-bottom: 20px;
        }
        form {
            margin-bottom: 20px;
        }
        label {
            display: block;
            margin-bottom: 10px;
        }
        input[type="text"],
        input[type="number"],
        select {
            width: 100%;
            padding: 8px;
            margin-bottom: 15px;
            border: 1px solid #ced4da;
            border-radius: 5px;
        }
        input[type="submit"] {
            background-color: #007bff;
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Ajouter une Rentrée d'Argent</h1>
        <form action="traitement_rentrée_argent.php" method="POST">
            <label for="chauffeur">Chauffeur :</label>
            <select name="chauffeur" id="chauffeur">
                <?php
                // Connexion à la base de données
                $host = "localhost";
                $user = "root";
                $pass = "";
                $db = "gestion_vehicules";
                $con = new mysqli($host, $user, $pass, $db);
                if ($con->connect_error) {
                    die("Échec de la connexion: " . $con->connect_error);
                }

                // Récupérer les chauffeur depuis la base de données
                $chauffeur_query = "SELECT id, nom FROM chauffeur";
                $result = $con->query($chauffeur_query);

                // Afficher les options pour les chauffeur
                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        echo "<option value=\"{$row['id']}\">{$row['nom']}</option>";
                    }
                }
                ?>
            </select>
            <label for="vehicule">Véhicule :</label>
            <select name="vehicule" id="vehicule">
                <?php
                // Récupérer les véhicules depuis la base de données
                $vehicules_query = "SELECT id, immatriculation FROM vehicule";
                $result = $con->query($vehicules_query);

                // Afficher les options pour les véhicules
                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        echo "<option value=\"{$row['id']}\">{$row['immatriculation']}</option>";
                    }
                }
                ?>
            </select>
            <label for="date">Date :</label>
            <input type="date" name="date" id="date" value="<?php echo date('Y-m-d'); ?>">
            <label for="montant">Montant :</label>
            <input type="number" name="montant" id="montant" step="0.01" min="0">
            <input type="submit" value="Ajouter">
        </form>
        <a href="rapports_financiers.php">Retour</a>
    </div>
</body>
</html>
