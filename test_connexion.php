<?php 
session_start();

$test="False";
$bdd=new PDO('mysql:host=localhost;dbname=dmp-test','root','');
$requete=$bdd->query(
"SELECT P.numSS AS SS,P.datenaiss AS dn
FROM Patient P ");

while ($donnees = $requete -> fetch())
{
	if (($donnees['SS']==$_POST['ssid'])&&($donnees['dn']==$_POST['dn']))
	{
		$test="True";
	}
}


$patternss = '/^          # début de chaîne
[12]                      # 1 ou 2 pour le sexe
[0-9]{2}[0-1][0-9]        # ça je me rappelle plus
(2[AB]|[0-9]{2})          # le département
[0-9]{3}[0-9]{3}[0-9]{2}  # ça non plus je ne sais plus
$                         # fin de chaîne
/x';
if((preg_match($patternss, $_POST['ssid']))&&($test=="True"))
{
	echo "Vous allez être redirigé sur votre compte dans 5 secondes";
	$_SESSION['ss']=$_POST['ssid'];
	header("refresh:2;url=patient.php");
}
else
{	
	echo "Votre code de sécurité sociale n'est pas valide";
	header("refresh:2;url=connexionpatient.php");
}
?>