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
$ss=$_SESSION['ss'];
$bdd=new PDO('mysql:host=localhost;dbname=dmp-test','root','');
$requete=$bdd->query(
"SELECT P.prenomP AS pre,P.nomP AS nom
FROM Patient P 
WHERE P.numSS='$ss'");

while ($donnees = $requete -> fetch())
{
	echo "Bonjour monsieur ", $donnees['pre'], " ", $donnees['nom'];
}

?>
  <br><br><br><br>
    <select>                      
    
    
    
    
    
    
    
    
    
    
    
    
    
    </select>
    
    
    
    
    
    
    
    
    <center>
<TABLE border="1" >

<TR>
    <TH> Date </TH>
    <TH> Vos diagnostic </TH>
</TR>
    
<TD>
        <?php 
           
         $bdd=new PDO('mysql:host=localhost;dbname=dmp-test','root','');
         $requete=$bdd->query('SELECT dateC AS date
		                      FROM consulte');  
       
         while ($donnees = $requete -> fetch())
			 {
				 
				 echo $donnees['date'] , "<br>";
              
			}
        $requete -> closeCursor();
         ?>
</TD>

<td>
        <?php 
         $bdd=new PDO('mysql:host=localhost;dbname=dmp-test','root','');
         $requete=$bdd->query('SELECT diagnostic AS diag
		                      FROM consulte');     
         while ($donnees = $requete -> fetch())
			 {
				 echo $donnees['diag'] ,"<br>";
			  }
          $requete -> closeCursor();
                ?>
    </td>
   
</TABLE>
            </center> 
    </header>
    </body>
</html>
