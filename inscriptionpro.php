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
	<form name="form" method="post" action="registerpro.php" >
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
	        <label for="pass">Mot de passe</label>
			<br>
			<input class="form-input" id="txt-input" type="password" placeholder="••••••••" name="pass">
			<br>
	        <br>
	        <label for="pass">Ville</label>
			<br>
			<input class="form-input" id="txt-input" type="text" placeholder="@Paris" name="ville">
			<br>
	        <br>
	        <label for="pass">Adresse</label>
			<br>
			<input class="form-input" id="txt-input" type="text" placeholder="@60 rue des olives" name="add">
			<br>
	        <br>
	        <label for="pass">Spécialité</label>
			<br>
			<input class="form-input" id="txt-input" type="text" placeholder="@Chirurgien" name="spec">
			<br>
	        <br>
	        RPPS
			<br>
			<input type="text" class="form-input" id="txt-input" placeholder="@12345678912" name="rppsid">
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

