<?php 
session_start();
$_SESSION['test']="false";
$rpps=$_SESSION['rpps'];
$patternss = '/^          # début de chaîne
[12]                      # 1 ou 2 pour le sexe
[0-9]{2}[0-1][0-9]        # ça je me rappelle plus
(2[AB]|[0-9]{2})          # le département
[0-9]{3}[0-9]{3}[0-9]{2}  # ça non plus je ne sais plus
$                         # fin de chaîne
/x';
if((preg_match($patternss, $_POST['patient'])))
{
	$rpps=$_SESSION['rpps'];
	$date=$_POST['jour'];
	$diag=$_POST['diag'];
	$ssid=$_POST['patient'];
	$bdd=new PDO('mysql:host=localhost;dbname=dmp-test','root','');
	$req2=$bdd->query(
        "SELECT COUNT(*) AS nb FROM consulte");
	while ($donnees = $req2 -> fetch())
	{
		$num=$donnees['nb'];
	}
	$num=$num+1;
	$requete=$bdd->query(
        "INSERT into consulte VALUES ('$rpps','$ssid','$date','$diag','$num')");
        
        

        
    header("refresh:5;url=pro.php");
    $_SESSION['test']="true";
    
}
else
{	
	echo "Votre code de sécurité sociale n'est pas valide";
	header("refresh:2;url=pro.php");
}
?>