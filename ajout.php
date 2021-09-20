<?php include 'header.php'

  ?>
<html>
    <head>
        <meta charset="utf-8" />
        <title></title>
    </head>
    <body onLoad="">
			 <script>
		 function modifierinput(x)
		 {
			 if (x==1){
    document.getElementById('supprimer').hidden = true;
    document.getElementById('envoigestion').hidden = false;
    document.getElementById('modifier').hidden = false;
				 
						}
			 if (x==0)    { document.getElementById('supprimer').hidden = true;
    document.getElementById('envoigestion').hidden = false;
    document.getElementById('modifier').hidden = true;
    document.getElementById('productform').hidden = true;
						  }
			 if (x==2)
				 { document.getElementById('supprimer').hidden = false;
    document.getElementById('envoigestion').hidden = false;
    document.getElementById('modifier').hidden = true;
				      document.getElementById('productform').hidden = true;

						  }

						}
		  	 </script>
		<?php if ($_SESSION['admin_connected']==1){
	  echo'
	  
		<form name="f" action="" method="post">
		   <br>
		 <SELECT name="liste" size="1" >
		 <Option">selectionner</option>
			<OPTION value="ajouter" >ajouter article</OPTION>
			<OPTION value="modifier" > modifier article</OPTION>
			<OPTION value="supprimer" >supprimer article</OPTION>
		</SELECT><br>
		  <input type="submit" value="valider" name="envoigestion" id="envoigestion">
	
</form>
		<form id="supprimer" method="post" hidden><br>
		 donner id <input name="idtodelete">
						<input type="submit" name="envoisupprimer" value="supprimer"></form>
						<form id="modifier" method="post" hidden><br>
		 donner id <input name="idarticle1">
						<input type="submit" name="envoimodifier" value="modifier"></form>
';}
	


//Suppression 
	  
	if (isset($_POST['liste'])){
if ($_POST['liste']=='supprimer'){
echo '<script>
modifierinput(2);
</script>';}}
	

if (isset($_POST['envoisupprimer'])){

	$idtodelete=$_POST['idtodelete'];
	$requete1="delete from article where idarticle=$idtodelete";
$result=$idconnection->query($requete1);
if(!$result){
$mes_erreur=$idconnection->errorInfo();
echo "Lecture impossible, code", $idconnection->errorCode(),$mes_erreur[2];
}

else  echo 'article supprime';}
//modifier
			if (isset($_POST['liste'])){
if ($_POST['liste']=='modifier'){
echo '<script>
modifierinput(1);
</script>';}}
	if (isset($_POST['envoimodifier'])){
$idarticle=$_POST['idarticle1'];
$requete1="select * from article where idarticle=$idarticle";
$result=$idconnection->query($requete1);
if(!$result){
$mes_erreur=$idconnection->errorInfo();
echo "Lecture impossible, code", $idconnection->errorCode(),$mes_erreur[2];
}
 else {
$row = $result->fetch(PDO::FETCH_NUM);
echo "modifier article <br>
<form name='articleform' method='POST' >
id article<input readonly  name='idarticle' value='$row[5]'><br> 
nom article<input name='nomarticle' value='$row[0]'><br>
description article<input name='descriptionarticle' value='$row[1]'><br>
quantite article<input name='quantitearticle' value='$row[2]'><br>
prix article<input name='prixarticle' value='$row[3]'><br>
type article<input name='typearticle' value='$row[4]'><br>
<input type='submit' value='modifier article' name='modifierarticle' >
";}}

if (isset($_POST['modifierarticle'])){
	//$idarticle=2;
$nomarticle=$_POST['nomarticle'];
$descriptionarticle=$_POST['descriptionarticle'];
$quantitearticle=$_POST['quantitearticle'];
	$prixarticle=$_POST['prixarticle'];
	$typearticle=$_POST['typearticle'];
	$idarticle=$_POST['idarticle'];

$requete1="update article set nomarticle='$nomarticle',
description='$descriptionarticle',
quantitearticle='$quantitearticle',
prix='$prixarticle',
type='$typearticle' where '$idarticle'=idarticle";
	$result=$idconnection->query($requete1);
if(!$result){
$mes_erreur=$idconnection->errorInfo();
echo "Lecture impossible, code :", $idconnection->errorCode(),$mes_erreur[2];
}

else  echo 'modification termine';

}
//ajouter
				if (isset($_POST['envoigestion'])){

	if (isset($_POST['liste'])){
if ($_POST['liste']=='ajouter'){
	echo '<script>
modifierinput(0);
</script>';
$requete1="select max(idarticle) from article";
$result=$idconnection->query($requete1);
if(!$result){
$mes_erreur=$idconnection->errorInfo();
echo "Lecture impossible, code", $idconnection->errorCode(),$mes_erreur[2];
}
 else {
while ($row = $result->fetch(PDO::FETCH_NUM)){
foreach($row as $donn){
$idarticle=$donn+1;}
echo "
<form id='productform' method='POST' >
id article<input  readonly name='idarticle' value='$idarticle'><br>
nom article<input name='nomarticle'><br>
description article<textarea name='descriptionarticle'></textarea><br>
quantite article<input name='quantitearticle'><br>
prix article<input name='prixarticle'><br>
type article<input name='typearticle'><br>
<input type='submit' value='ajouter article' name='envoiarticle'>
";}}}}}



if (isset($_POST['envoiarticle'])){
	$idarticle=$_POST['idarticle'];
$nomarticle=$_POST['nomarticle'];
$descriptionarticle=$_POST['descriptionarticle'];
$quantitearticle=$_POST['quantitearticle'];
	$prixarticle=$_POST['prixarticle'];
	$typearticle=$_POST['typearticle'];

$requete1="insert into article values('$nomarticle','$descriptionarticle','$quantitearticle','$prixarticle','$typearticle','$idarticle')";
$result=$idconnection->query($requete1);
if(!$result){
$mes_erreur=$idconnection->errorInfo();
echo "Lecture impossible, code ", $idconnection->errorCode(),$mes_erreur[2];
}

else  echo 'insertion termine';

}
?>

			</body></html>

