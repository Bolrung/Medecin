<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="stylec.css">
</head>
<body>
<header class="head-form">
      <h2>Connexion</h2>
	<form name="form" id="form" class="form" method="post" action="test_connexion2.php" >
	<form name="redir" id="redir" method="post" action="inscriptionpro.php">
	<div class="con">
		<div class="field-set">

			<br>
			Saisissez votre numéro RPPS
			<br>
			<input type="text" class="form-input" id="txt-input" placeholder="@12345678912" name="rppsid">
			<br>
			<br>
			Saisissez votre mot de passe
			<br>
			<input type="password" class="form-input" id="txt-input" placeholder="••••••••" name="pass">
			<br>
			<br>
			<button class="btn submits sign-up right">Connexion

      		<i class="fa fa-user-plus" aria-hidden="true"></i>
      		</button>
      		</form>
			
			<button class="btn submits sign-up left" form="redir" onclick="window.location.href='inscriptionpro.php'">Inscription

      		<i class="fa fa-user-plus" aria-hidden="true"></i>
      		</button>
      	</form>

			</div>
	</div>


</body>
</html>