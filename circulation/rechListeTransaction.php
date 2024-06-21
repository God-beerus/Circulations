<?php
require_once('cnx.php');
try{
@$cle=$_GET['index'];
if(empty($cle))
{
$req="select * from tb_expediteur e, tb_destinateur d, tb_transaction t
where e.idEx = t.codE and d.idD= t.codD   ORDER BY idTr DESC ";
$ps = $pdo->query($req);

}else{
$req="select * from tb_expediteur e, tb_destinateur d, tb_transaction t
where e.idEx = t.codE and d.idD= t.codD and  (nomE like '%".$cle."%' || nomD like '%".$cle."%' || codT= '".$cle."'
|| paysD like '%".$cle."%' || paysE like '%".$cle."%' || dateT like '%".$cle."%' || statuit ='".$cle."' || idTr ='".$cle."'
|| adresseE like '%".$cle."%' || adresseD like '%".$cle."%' || telD like '%".$cle."%' || tel like '%".$cle."%' || montant ='".$cle."' ) ORDER BY idTr DESC ";
$ps = $pdo->query($req);
}
$liste = $ps->fetchALL(PDO::FETCH_ASSOC);
header("Content-Type:application/json");
echo (json_encode($liste));
}
catch(Exception $ex )
{
          echo'ECHEQUE DE LA REQUETE '.$ex->getMessage();
}


  
?>