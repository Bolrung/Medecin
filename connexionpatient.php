<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="stylec.css">
</head>
<body>
<header class="head-form">
      <h2>Connexion</h2>
	<form name="form" id="form" class="form" method="post" action="test_connexion.php" >
	<form name="redir" id="redir" method="post" action="inscription.php">
	<div class="con">
		<div class="field-set">

			<br>
			Saisissez votre numéro de sécurité sociale
			<br>
			<input type="text" class="form-input" id="txt-input" placeholder="@12345678912345" name="ssid">
			<br>
			<br>			
			Entrez votre date de naissance
			<br>
			<input type="date" class="form-input" id="start" name="dn"  min="1910-01-01" max="2019-12-31">
			<br>
			<br>
			<button class="btn submits sign-up right">Connexion

      		<i class="fa fa-user-plus" aria-hidden="true"></i>
      		</button>
      		</form>
			
			<button class="btn submits sign-up left" form="redir" onclick="window.location.href='inscription.php'">Inscription

      		<i class="fa fa-user-plus" aria-hidden="true"></i>
      		</button>
      	</form>

			</div>
	</div>


</body>
</html>