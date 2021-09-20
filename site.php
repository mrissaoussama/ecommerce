<?php if (session_status() == PHP_SESSION_NONE) {
   	$_SESSION['is_connected']=0;
$_SESSION['admin_connected']=0;
}
//include_once('fix_mysql.inc.php');
	$idconnection=new PDO('mysql:host=localhost;dbname=ecommerce', 'root', ''); 
 session_start();
$x="";
function register(){
   $nom=$_POST['nom'];
	$prenom=$_POST['prenom'];
	$email=$_POST['email'];
	$mdp=$_POST['mdp'];
	$phone=$_POST['phone'];
	$datenaissance=$_POST['datenaissance'];
	$adresse=$_POST['adresse'];
	$ville=$_POST['region'];
	$postalcode=$_POST['postalcode'];
$requete1 = "SELECT * FROM `client` WHERE `email` = '$email'";
$result=$idconnection->query($requete1);
if(!$result){
$mes_erreur=$idconnection->errorInfo();
echo "Lecture impossible, code", $idconnection->errorCode(),$mes_erreur[2];
}
 else {
mysqli_query(
      "INSERT INTO client (nom,prenom,email,mdp,phone,adresse,ville,postalcode,datenaissance) VALUES('$nom','$prenom','$email','$mdp','$phone','$adresse','$ville','$postalcode','$datenaissance')");}
}

if(isset($_POST['registerbutton'])){
register();}
	
function login(){
  	$idconnection=new PDO('mysql:host=localhost;dbname=ecommerce', 'root', ''); 

	$email=$_POST['email'];
	$mdp=$_POST['mdp'];
	
$requete1 = "SELECT nom,prenom FROM `client` WHERE `email` = '$email' and `mdp` = '$mdp'";
	$result1=$idconnection->query($requete1);



	if(!$result1 ){
$mes_erreur=$idconnection->errorInfo();
echo "Lecture impossible, code", $idconnection->errorCode(),$mes_erreur[2];
}
 else {
while ($row = $result1->fetch(PDO::FETCH_NUM)){
 $_SESSION["nom"]=$row[0];
  $_SESSION["mdp"]=$mdp;
	if($row[0]=="admin")
	{$_SESSION['admin_connected']=1;$_SESSION['is_connected']=1;}
	else
	$_SESSION['is_connected']=1;
}}}

 


if(isset($_POST['registerbutton'])){
register();}
		if(isset($_POST['loginbutton'])){
login();}
if(isset($_POST['logoutbutton'])){
session_destroy();}
  ?>