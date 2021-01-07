<?php 
session_start();

$patternss = '/^          # début de chaîne
[12]                      # 1 ou 2 pour le sexe
[0-9]{2}[0-1][0-9]        # ça je me rappelle plus
(2[AB]|[0-9]{2})          # le département
[0-9]{3}[0-9]{3}[0-9]{2}  # ça non plus je ne sais plus
$                         # fin de chaîne
/x';
if((preg_match($patternss, $_POST['ssid'])))
{
	$ssid=$_POST['ssid'];
	$nom=$_POST['Nom'];
	$prenom=$_POST['Prenom'];
	$dn=$_POST['naissance'];
	if ($_POST['choix']=='Homme')
	{
		$sexe='M';
	}
	else
	{
		$sexe='F';
	}
	$bdd=new PDO('mysql:host=localhost;dbname=dmp-test','root','');
	$requete=$bdd->query(
	"INSERT INTO patient VALUES ('$ssid', '$nom','$prenom','$sexe','$dn',0)  ");
	echo "Votre compte a bien été créé";
	header("refresh:5;url=main.php");
}
else
{	
	echo "Votre code de sécurité sociale n'est pas valide";
	header("refresh:2;url=inscription.php");
}
?>