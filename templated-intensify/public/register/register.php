<!DOCTYPE html>
<html lang="en">
<head>
	<title>GCFestival Registratie</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
<?php
    require_once('../../private/initialize.php');
    ?>

</head>
<body>
	
	<div class="limiter">
		<div class="container-login100" style="background-image: url('images/bg2.jpg');">
			<div class="wrap-login100 p-t-30 p-b-50">
				<span class="login100-form-title p-b-41">
					Registratie
				</span>
				<form class="login100-form validate-form p-b-33 p-t-5" action="registercomplete.php" method="POST">

					<div class="wrap-input100 validate-input" data-validate = "Vul uw voornaam in">
						<input class="input100" type="text" name="voornaam" placeholder="Voornaam">
						<span class="focus-input100" data-placeholder="&#xe82a;"></span>
					</div>
					<div class="wrap-input100 validate-input" data-validate = "Vul uw tussenvoegsel in">
						<input class="input100" type="text" name="tussenvoegsel" placeholder="Tussenvoegsel">
						<span class="focus-input100" data-placeholder="&#xe82a;"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Vul uw achternaam in">
						<input class="input100" type="text" name="achternaam" placeholder="Achternaam">
						<span class="focus-input100" data-placeholder="&#xe82a;"></span>
					</div>
					<div class="wrap-input100 validate-input" data-validate = "Vul uw e-mail in">
						<input class="input100" type="text" name="email" placeholder="E-mail">
						<span class="focus-input100" data-placeholder="&#xe82a;"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Vul uw telefoonnummer in">
						<input class="input100" type="text" name="telnr" placeholder="Telefoonnummer">
						<span class="focus-input100" data-placeholder="&#xe82a;"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Vul uw straatnaam in">
						<input class="input100" type="text" name="straat" placeholder="Straatnaam">
						<span class="focus-input100" data-placeholder="&#xe82a;"></span>
					</div>
					<div class="wrap-input100 validate-input" data-validate = "Vul uw huisnummer in">
						<input class="input100" type="text" name="huisnr" placeholder="Huisnummer">
						<span class="focus-input100" data-placeholder="&#xe82a;"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Vul uw postcode in">
						<input class="input100" type="text" name="postcode" placeholder="Postcode">
						<span class="focus-input100" data-placeholder="&#xe82a;"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Vul uw woonplaats in">
						<input class="input100" type="text" name="woonplaats" placeholder="Woonplaats">
						<span class="focus-input100" data-placeholder="&#xe82a;"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Vul uw wachtwoord in">
						<input class="input100" type="password" name="wachtwoord" placeholder="Wachtwoord">
						<span class="focus-input100" data-placeholder="&#xe80f;"></span>
					</div>

					<div class="container-login100-form-btn m-t-32">
						<button class="login100-form-btn">
							<input style="background-color: unset; color:white;" type="submit" name="register" value="Registreren">
						</button>
					</div>
					<center><a href="../login/login.html">Heeft u al een account? klik dan hier.</a></center>
			</div class="register">
		</div>
	</div>
	

	<div id="dropDownSelect1"></div>
	
<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>