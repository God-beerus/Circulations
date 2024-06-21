<?php
try{
$host='mysql:host=localhost;dbname=vehicule'; 
$log='root';
$pas='';
$pdo = new PDO($host,$log,$pas);

//$pdo = set_charset("UTF8");
echo'Connexion au serveur';

 $req="select * from tb_voiture  ";
 
 $ps = $pdo->query($req);
 while($done = $ps->fetch(PDO::FETCH_ASSOC))
 {
 echo"<br>".$done['nomV'];}

}catch(Exception $ex )
 {
     $msg = 'ERREUR PDO dans ' . $ex->getFile() . ' L.' . $ex->getLine() . ' : ' . $ex->getMessage();

     echo$msg;
 }

?>