<?php
require_once('cnx.php');
try{
@$cle=$_GET['index'];
if(empty($cle))
{
$req="select nomV,ile,tel, matrV,ligne,milieuAttente , nomCh,village, prenomCh,datCreation,dateExpiration,ValiditePermis,dateDas,dateFas,etatAs from tb_voiture v,
 tb_chauffeur c, tb_permis p, tb_assurance a,tb_travail t, tb_localite l
where v.idV = a.idVt and p.idCho = c.idChof and v.idV = a.idVt 
and t.idCh = c.idChof and t.idVt = v.idV and v.idLo = l.idLoc    ORDER BY nomV DESC ";
$ps = $pdo->query($req);

}else{
$req="select nomV,ile, matrV,ligne,tel,milieuAttente, nomCh,village, prenomCh,datCreation,ValiditePermis,dateExpiration,dateDas,dateFas,etatAs
 from tb_voiture v, tb_chauffeur c, tb_permis p, tb_assurance a,tb_travail t, tb_localite l
where v.idV = a.idVt and p.idCho = c.idChof and v.idV = a.idVt 
and t.idCh = c.idChof and t.idVt = v.idV and v.idLo = l.idLoc and (nomV like '%".$cle."%' || matrV like '%".$cle."%' || ligne= '".$cle."'
|| nomCh like '%".$cle."%' || prenomCh like '%".$cle."%' || ValiditePermis like '%".$cle."%' || etatAs ='".$cle."'
|| village like '%".$cle."%' || ValiditePermis like '%".$cle."%' || ile like '%".$cle."%'|| milieuAttente like '%".$cle."%'|| tel like '%".$cle."%'
  ) ORDER BY nomV DESC ";
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