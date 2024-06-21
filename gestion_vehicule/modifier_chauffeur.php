<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modifier un chauffeur</title>
</head>
<body>
    <h1>Modifier un chauffeur</h1>

    <?php
    // Vérification si l'ID du chauffeur est passé en paramètre
    if (isset($_GET['id'])) {
        // Récupération de l'ID du chauffeur à modifier
        $id = $_GET['id'];

        // Connexion à la base de données et récupération des détails du chauffeur
        // Remplacez les valeurs par vos informations de connexion à la base de données
        $host = "localhost";
        $user = "root";
        $pass = "";
        $db = "gestion_vehicules";
        $con = new mysqli($host, $user, $pass, $db);
        if ($con->connect_error) {
            die("Échec de la connexion: " . $con->connect_error);
        }
        $sql = "SELECT * FROM chauffeur WHERE id=$id";
        $result = $con->query($sql);

        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            // Affichage du formulaire pré-rempli avec les détails du chauffeur
            echo "<form action='modifier_chauffeur_action.php' method='post'>
                    <input type='hidden' name='id' value='".$row['id']."'>
                    Nom : <input type='text' name='nom' value='".$row['nom']."'><br>
                    Prénom : <input type='text' name='prenom' value='".$row['prenom']."'><br>
                    Téléphone : <input type='text' name='telephone' value='".$row['telephone']."'><br>
                    Adresse : <input type='text' name='adresse' value='".$row['adresse']."'><br>
                    <input type='submit' value='Modifier'>
                  </form>";
        } else {
            echo "Aucun chauffeur trouvé avec cet identifiant.";
        }
        $con->close();
    } else {
        echo "Identifiant du chauffeur non spécifié.";
    }
    ?>

    <a href="chauffeur.php">Retour</a>
</body>
</html>



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

$id = $_GET['id'];

// Récupération des informations du chauffeur
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Mise à jour des informations du chauffeur
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $telephone = $_POST['telephone'];
    $adresse = $_POST['adresse'];
    $con->query("UPDATE chauffeur SET nom='$nom', prenom='$prenom', telephone='$telephone', adresse='$adresse' WHERE id=$id");

    // Redirection vers la page des chauffeur
    header('Location: chauffeur.php');
    exit();
} else {
    $result = $con->query("SELECT * FROM chauffeur WHERE id=$id");
    $chauffeur = $result->fetch_assoc();
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modifier un Chauffeur</title>
</head>
<body>
    <h1>Modifier un Chauffeur</h1>

    <form method="POST" action="modifier_chauffeur.php?id=<?php echo $id; ?>">
        <label for="nom">Nom:</label>
        <input type="text" id="nom" name="nom" value="<?php echo $chauffeur['nom']; ?>" required><br>
        <label for="prenom">Prénom:</label>
        <input type="text" id="prenom" name="prenom" value="<?php echo $chauffeur['prenom']; ?>" required><br>
        <label for="telephone">Téléphone:</label>
        <input type="text" id="telephone" name="telephone" value="<?php echo $chauffeur['telephone']; ?>" required><br>
        <label for="adresse">Adresse:</label>
        <input type="text" id="adresse" name="adresse" value="<?php echo $chauffeur['adresse']; ?>" required><br>
        <button type="submit">Modifier</button>
    </form>

    <a href="chauffeur.php">Retour</a>
</body>
</html>
