<?php session_start();
print_r($_SESSION) ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>GCFestival Login</title>
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
					Account Login
				</span>
				<form class="login100-form validate-form p-b-33 p-t-5" method="POST">

					<div class="wrap-input100 validate-input" data-validate = "Vul een geldig E-mail adres in">
						<input class="input100" type="text" name="email" placeholder="E-mail adres">
						<span class="focus-input100" data-placeholder="&#xe82a;"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Vul een geldig wachtwoord in">
						<input class="input100" type="password" name="wachtwoord" placeholder="Wachtwoord">
						<span class="focus-input100" data-placeholder="&#xe80f;"></span>
                    </div>
                    
					<div class="container-login100-form-btn m-t-32">
						<button class="login100-form-btn">
							Login
						</button>
						
                    <?php if(!empty($_POST["email"]) && !empty($_POST["wachtwoord"])){ //als velden niet leeg zijn voer het uit
                        $email = $_POST["email"];
                        $wachtwoord = $_POST["wachtwoord"];

                        $sql = "SELECT * FROM gebruiker WHERE email = '$email' and wachtwoord = '$wachtwoord'";

                        $query = mysqli_query($db, $sql);
                        $result = mysqli_num_rows($query);

                        if($result === 1){ //als $result 1 (ja/overeenkomt met het data in het db) is dan direct hij naar profiel.php
							
							$_SESSION["login"] = true;
							$_SESSION["username"] = $email;
							header("Location: ../index.php"); //redirect naar index.html
                            }
                        }
                    ?>
                </form>

					</div>
							<center><a href="../register/register.php">Nog geen account? Registreer hier.</a></center>
			</div>
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