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
	echo "<h1>Bonjour monsieur ", $donnees['pre'], " ", $donnees['nom'],'</h1>'; 
}
?>

<table>
		<tr>
			<td>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			</td>
			<td>
<form name="ajout_patient" action="ajout-patient.php" method="post">
<div class="con">
		<div class="field-set">
			<h1> Ajouter un patient </h1>
			<br>
			<label for='ssid'>Numéro de sécurité sociale</label>
			<br>
			<input class="form-input" id="txt-input" type="text" placeholder="@123456789123456" name="ssid">
			<br><br>
			<label for='prenom'>Prenom du patient</label>
			<br>
			<input class="form-input" id="txt-input" type="text" placeholder="@Prenom" name="prenom">
			<br><br>
			<label for='nom'>Nom du patient</label>
			<br>
			<input class="form-input" id="txt-input" type="text" placeholder="@Nom" name="nom">
			<br><br>
			<button class="btn submits sign-up">Valider

      		<i class="fa fa-user-plus" aria-hidden="true"></i>
      		</button>

		</div>
</div>
</form>
</td>
<td>
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	</td>
<td>
<form name="Diagno" action="testdiagnostic.php" method="post">
<div class="con">
		<div class="field-set">
			<h1> Emettre un diagnostic </h1>
			<br>
			
			<div class="formfield-select">
			<label for="sel" >Choisissez votre patient:</label>
			<div class="formfield-select--container">
			<select id="sel" name="patient">
					<?php
						session_start();
						$rpps=$_SESSION['rpps'];
						$bdd=new PDO('mysql:host=localhost;dbname=dmp-test','root','');

						$requete=$bdd->query(
						"SELECT P.numSS AS SS,P.prenomP AS pre, P.nomP as nom
						FROM Patient P
						WHERE P.numRPPS='$rpps'
						");

						while ($donnees = $requete -> fetch())
						{
							echo "<option>",$donnees['SS'],"</option>";
						}
					?>
			</select>
			</div>
			</div>
			
			<label for='prenom'>Votre diagnostic</label>
			<br>
			<input class="form-input" id="txt-input" type="text" placeholder="@Diagnostic" size="100" name="diag">
			<br><br>
			<label for='nom'>Date du diagnostic</label>
			<br>
			<input type="date" class="form-input" id="start" name="jour"  min="1910-01-01" max="2019-12-31">
			<br><br>
			<button class="btn submits sign-up">Valider

      		<i class="fa fa-user-plus" aria-hidden="true"></i>
      		</button>

		</div>
</div>
</form>

<td>
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	</td>
<td>
	<form name="Voir" action="infopatient.php" method="post">
<div class="con">
		<div class="field-set">
			<h1> Voir les infos d'un patient </h1>
			<br>
			<div class="formfield-select">
			<label for="sel" >Choisissez votre patient:</label>
			<div class="formfield-select--container">
			<select id="sel" name="patient" form="Voir"">
					<?php
						session_start();
						$rpps=$_SESSION['rpps'];
						$bdd=new PDO('mysql:host=localhost;dbname=dmp-test','root','');

						$requete=$bdd->query(
						"SELECT P.numSS AS SS,P.prenomP AS pre, P.nomP as nom
						FROM Patient P
						WHERE P.numRPPS='$rpps'
						");

						while ($donnees = $requete -> fetch())
						{
							echo "<option>", $donnees['pre']," | ", $donnees['nom'], "  | ",$donnees['SS'],"</option>";
						}
					?>
			</select>
			</div>
			</div>
			<br><br>
			<button class="btn submits sign-up">Valider
      		<i class="fa fa-user-plus" aria-hidden="true"></i>
      		</button>
		</div>
</div>
</form>
</td>
</tr>
</table>
</header>
</body>
</html>