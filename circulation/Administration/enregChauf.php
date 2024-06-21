<?php
require_once('../conx.php');

@$mtr = $_POST['mtr'];
$nom = $_POST['nom'];
$pren = $_POST['prenom'];
$tel = $_POST['tel'];
@$phot = $_POST['phot'];

// Préparation de la requête d'insertion
$stmt = $con->prepare("INSERT INTO tb_chauffeur (nomCh, prenomCh, tel, photo) VALUES (?, ?, ?, ?)");
$stmt->bind_param("ssss", $nom, $pren, $tel, $phot);

// Exécution de la requête
if ($stmt->execute()) {
    echo "Insertion réussie";
} else {
    echo "Erreur lors de l'insertion: " . $stmt->error;
}

// Fermeture de la connexion
$stmt->close();
$con->close();
?>
