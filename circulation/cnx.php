<?php
try{
$host ='mysql:host = localhost; dbname=vehicule'; 
$log='root';
$pas='';
$pdo = new PDO($host,$log,$pas);
//$pdo = set_charset("UTF8");
//echo'connexion au serveur<br>';

}catch(Exception $ex )
 {
    echo'Erreur de connexion au serveur'.$ex->getMessage();
}
?>