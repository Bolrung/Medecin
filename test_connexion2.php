

<?php 
session_start();

$test="False";
$bdd=new PDO('mysql:host=localhost;dbname=dmp-test','root','');
$requete=$bdd->query(
"SELECT M.numRPPS AS RPPS,M.pass AS pass
FROM Medecin M ");

while ($donnees = $requete -> fetch())
{
	if (($donnees['RPPS']==$_POST['rppsid'])&&($donnees['pass']==$_POST['pass']))
	{
		$test="True";
	}
}


$patternrpps = '/^          # début de chaîne           
[0-9]{11}     # ça je me rappelle plus
$                         # fin de chaîne
/x';

if((preg_match($patternrpps, $_POST['rppsid']))&&($test=="True"))
{
	echo "Vous allez être redirigé sur votre compte dans 2 secondes";
	$_SESSION['rpps']=$_POST['rppsid'];
	header("refresh:2;url=pro.php");
}
else
{	
	echo "Erreur ! Veuillez vérifier vos identifiants";
	header("refresh:2;url=connexionpro.php");
}
?>