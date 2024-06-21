<?php
$host = "localhost";
$user = "chercheur";
$pas = "azerty";
$db = "dbtransfert";

// Connexion à la base de données avec mysqli
$con = new mysqli($host, $user, $pas, $db);

// Vérifier la connexion
if ($con->connect_error) {
    die("Échec de la connexion: " . $con->connect_error);
} else {
    echo "Connexion réussie à la base de données " . $db;
}
?>


