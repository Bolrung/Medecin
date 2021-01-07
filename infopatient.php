<!DOCTYPE html>
<html>
<head>
	<title>Patient</title>
	<link rel="stylesheet" type="text/css" href="stylec.css">
</head>
<body>

<header class="head-form">
<?php  
session_start();
$rpps=$_SESSION['rpps'];
$bdd=new PDO('mysql:host=localhost;dbname=dmp-test','root','');
$requete=$bdd->query(
"SELECT M.prenomM AS pre,M.nomM AS nom
FROM Medecin M 
WHERE M.numRPPS='$rpps'");

while ($donnees = $requete -> fetch())
{
	echo "<h1>Monsieur ", $donnees['pre'], " ", $donnees['nom'],'</h1>'; 
}
?>

<form name="Voir">
<div class="con">
		<div class="field-set">
			<h1> infos du patient </h1>
			<br>
			<div class="formfield-select">
			
	
					<?php
						$rpps=$_SESSION['rpps'];
						$bdd=new PDO('mysql:host=localhost;dbname=dmp-test','root','');

						$requete=$bdd->query(
						"SELECT P.numSS AS SS,P.prenomP AS pre, P.nomP as nom ,P.numRPPS as rpps , P.sexe as sexe , m.nomM as Nmedecin ,c.diagnostic as diagno ,    c.dateC as dc
						FROM Patient P
                        INNER JOIN medecin m 
                        on P.numRPPS = m.numRPPS
                        INNER JOIN consulte c 
                        on m.numRPPS = c.numRPPS
						WHERE P.numRPPS='$rpps'
						");
                        $i=0;
						while ($donnees = $requete -> fetch())
						{
                          
                           if ($i==0)
                           {
                            echo "Prénom:  " . $donnees['pre'],'<br>',  "Nom:  ". $donnees['nom'],'<br>',"Sexe:  ".$donnees['sexe'], '<br>',"Numero de sécuriter social:  ".$donnees['SS'], '<br>',"Numero medecin traitant:  ".$donnees['rpps'],
                             '<br>',"Nom médecin traitant:".$donnees['Nmedecin'],'<br>',"diagnostic:  ";
                           }
                           echo '<br>'. $donnees['diagno'],' | '. $donnees['dc'];
                           $i++;
						}
					?>
			
			</div>
			</div>
		
	
		</div> 
</div>
</form>
</header>
</body>
</html>