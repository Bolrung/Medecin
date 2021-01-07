<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
	<script type="text/javascript" src="script.js"></script>
	<link rel="stylesheet" type="text/css" href="stylec.css">
	<title></title>
</head>
<body>
   <header class="head-form">
      <h2>Inscription</h2>
	<form name="form" method="post" action="registerp.php" >
	<div class="con">
		<div class="field-set">

			<label for="Prenom">Prenom</label>
			<br>
			<input class="form-input" id="txt-input" type="text" placeholder="@Prenom" name="Prenom">
			<br>
			<br>
			<label for="Nom">Nom</label>
			<br>
			<input class="form-input" id="txt-input" type="text" placeholder="@Nom" name="Nom">
			<br>
	        <br>
			Quel est votre sexe?
			<br>
	        <br>			
			<label for="Male">Homme</label>
			<input type="radio" class="form-input2" value="Homme" id="Male" name="choix">
			<label for="Female">Femme</label>
			<input type="radio" class="form-input2" value="Femme" id="Female" name="choix">
			<br>
	        <br>			
			Quel est votre date de naissance?
			<br>
			<input type="date" class="form-input" id="start" name="naissance"  min="1910-01-01" max="2019-12-31">
			<br>
			<br>
			Saisissez votre numéro de sécurité sociale
			<br>
			<input type="text" class="form-input" id="txt-input" placeholder="@123456789123456" name="ssid">
			<br>
			<br>
			<button class="btn submits sign-up">Valider

      		<i class="fa fa-user-plus" aria-hidden="true"></i>
      		</button>
			</div>
	</div>
</form>
</body>
</html>

