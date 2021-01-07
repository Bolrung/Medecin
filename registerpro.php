<?php 
session_start();

$patternrpps = '/^          # début de chaîne           
[0-9]{11}     # ça je me rappelle plus
$                         # fin de chaîne
/x';

if((preg_match($patternrpps, $_POST['rppsid'])))
{
	$rppsid=$_POST['rppsid'];
	$nom=$_POST['Nom'];
	$prenom=$_POST['Prenom'];
	$pass=$_POST['pass'];
	$add=$_POST['add'];
	$ville=$_POST['ville'];
	$spec=$_POST['spec'];

	$bdd=new PDO('mysql:host=localhost;dbname=dmp-test','root','');
	$requete=$bdd->query(
	"INSERT INTO medecin VALUES ('$rppsid', '$nom','$prenom','$spec','$ville','$add','$pass')  ");
	echo "Votre compte a bien été créé";
	header("refresh:2;url=main.php");
}
else
{	
	echo "Votre RPPS n'est pas valide";
	header("refresh:2;url=inscriptionpro.php");
}
?>