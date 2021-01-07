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
if((preg_match($patternss, $_POST['ssid'])))
{
	$ssid=$_POST['ssid'];
	$nom=$_POST['nom'];
	$prenom=$_POST['prenom'];

	$bdd=new PDO('mysql:host=localhost;dbname=dmp-test','root','');
	$requete=$bdd->query(
        "UPDATE patient SET numRPPS = '$rpps'  ");
        
        

        
       header("refresh:0;url=pro.php");
       $_SESSION['test']="true";
    
}
else
{	
	echo "Votre code de sécurité sociale n'est pas valide";
	header("refresh:2;url=pro.php");
}
?>