<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>INTERFACE D'ENREGISTREMENT</title>
<style type="text/css">
.teste1 {
	border: thin dotted #F00;
	background-image: url(images/BANNER.png);
	left: auto;
	top: auto;
	right: auto;
	bottom: auto;
}
#apDiv1 {
	position:absolute;
	width:352px;
	height:206px;
	z-index:1;
	left: 448px;
	top: 173px;
	border-radius:14px;
	border-color:#00F;
	background-color: #E2E0DE;
}
</style>
<script language="JavaScript" type="text/JavaScript">
<!--
function MM_reloadPage(init) {  //reloads the window if Nav4 resized
  if (init==true) with (navigator) {if ((appName=="Netscape")&&(parseInt(appVersion)==4)) {
    document.MM_pgW=innerWidth; document.MM_pgH=innerHeight; onresize=MM_reloadPage; }}
  else if (innerWidth!=document.MM_pgW || innerHeight!=document.MM_pgH) location.reload();
}
MM_reloadPage(true);
//-->
</script>
</head>

<body>
<div class="teste1" id="apDiv1">
  <form id="form1" name="form1" method="post" action="Administration/enregChauf.php">
    <p>&nbsp;</p>
    <table width="341">
      <tr align="center">
        <td colspan="3">ENREGISTREMENT D'UN MEMBRE</td>
      </tr>
      <tr>
        <td width="91"><strong>Nom :</strong></td>
        <td width="144"><input type="text" name="nom" id="nom" /></td>
        <td width="90"><select name="select" id="select">
          <option value="Chauffeur">Chaufeur</option>
          <option value="Voiture">Voiture</option>
        </select></td>
      </tr>
      <tr>
        <td><strong>Prénom : </strong></td>
        <td><input type="text" name="prenom" id="prenom" /></td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td><strong>Téléphone :</strong></td>
        <td><input type="text" name="tel" id="tel" /></td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td align="center"><input type="submit" name="benv" id="benv" value="Envoyer" /></td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
    </table>
  </form>
</div>
<div id="Layer1" style="position:absolute; left:183px; top:78px; width:973px; height:44px; z-index:2" class="teste1"></div>
<div  align="center"id="teste3" style="position:absolute; left:984px; top:22px; width:174px; height:26px; z-index:3; background-image: url(images/BANNER.png); layer-background-image: url(images/BANNER.png); border: 1px none #000000;"> 
  <input type="submit" name="Submit" value="Submit" />
</div>
</body>
</html>
