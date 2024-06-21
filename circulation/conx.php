<?php
$host = "localhost";
$user = "root";
$pas = "";
$db = "vehicule";

// Connexion à la base de données
$con = new mysqli($host, $user, $pas, $db);

// Vérifier la connexion
if ($con->connect_error) {
    die("Échec de la connexion: " . $con->connect_error);
}
?>
