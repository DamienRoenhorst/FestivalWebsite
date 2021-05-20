<?php
require_once('../private/initialize.php');
?>

<!DOCTYPE HTML>
<!--
	Intensify by TEMPLATED
	templated.co @templatedco
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html>
	<head>
		<title>GCFestival</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
		<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
	</head>
	<body>

		<!-- Header -->
			<header id="header">
				<nav class="left">
					<a href="#menu"><span>Menu</span></a>
				</nav>
				<a href="index.php" class="logo">GCFestival</a>
				<nav class="right">
					<?php if(isset($_SESSION["login"]) == true){
					$login = "<a href='login/uitloggen.php' class='button fit'>Uitloggen</a>";
					echo $login;
					}else{
						$login = "<a href='login/login.php' class='button fit'>Login</a>";
						echo $login;
					}?>
				</nav>
			</header>

		<!-- Menu -->
			<nav id="menu">
				<ul class="links">
					<li><a href="index.php">Home</a></li>
					<li><a href="register/register.php">Registreer</a></li>
					<li><a href="#two">Tickets</a></li>

				</ul>
				<ul class="actions vertical">
					<?php if(isset($_SESSION["login"]) == true){
					$login = "<a href='login/login.php' class='button fit'>Login</a>";
					echo $login;
					}else{
						$uitloggen = "<a href='login/login.php' class='button fit'>Uitloggen</a>";
						echo $uitloggen;
					}
					?>
				</ul>
			</nav>

		<!-- Banner -->
			<section id="banner">
				<div class="content">
					<ul class="actions">
						<li><a href='index.php' class='button fit'>Home</a></li>
					</ul>
				</div>
			</section>
		<!-- One -->
			<section id="one" class="wrapper">
				<div class="inner flex flex-3">
					<div class="flex-item left">
						<div>
							<h3>Profiel pagina</h3>

								<?php
									$klantID = $_SESSION["klantID"];
									$sql = "SELECT * FROM gebruiker WHERE klantID = '$klantID'";
									$query	 = mysqli_query($db, $sql);
									$result = mysqli_fetch_assoc($query);
								?>
									<form action="profielupdate.php" method="post">
									<label style="color: white;text-align:left;">Voornaam</label>
									<input type="text" name="voornaam" placeholder="<?php echo $result["voornaam"]; ?>">
									<label style="color: white;text-align:left;">achternaam</label>
									<input type="text" name="achternaam" placeholder="<?php echo $result["achternaam"]; ?>">
									<label style="color: white;text-align:left;">email</label>
									<input type="email" name ="email" placeholder="<?php echo $result["email"]; ?>">
									<label style="color: white;text-align:left;">password</label>
									<input type="password" name="password">
									<label style="color: white;text-align:left;">telnr</label>
									<input type="text" name="telnr"placeholder="<?php echo $result["telnr"]; ?>">
									<label style="color: white;text-align:left;">straat</label>
									<input type="text" name="straat" placeholder="<?php echo $result["straat"]; ?>">
									<label style="color: white;text-align:left;">huisnummer</label>
									<input type="text" name="huisnr" placeholder="<?php echo $result["huisnr"]; ?>">
									<label style="color: white;text-align:left;">postcode</label>
									<input type="text" name="postcode" placeholder="<?php echo $result["postcode"]; ?>">
									<label style="color: white;text-align:left;">woonplaats</label>
									<input type="text" name="woonplaats" placeholder="<?php echo $result["woonplaats"]; ?>">
									<br>
									<input type ="submit"class='button fit'value="Aanpassen">
									</form>

									
					</div>
					</div>
					<div class="flex-item image fit round">
					<table>
						<tr>
						<td>Aantal</td>
						<td>Type</td>
						<td>Totaal</td>
						</tr>

					<?php
						$sql = "SELECT * FROM bestelling JOIN tickets ON bestelling.ticketID = tickets.ticketID WHERE bestelling.klantID = " . $result['klantID']; //selecteert alles van bestellingen en voegt ze samen toe op bestellingen.ticketID
						$query = mysqli_query($db, $sql);
						while($result = mysqli_fetch_assoc($query)) {
							echo "<tr>";
							echo "<td>".$result["aantal"]."</td>";
							echo "<td>".$result["ticketnaam"]."</td>";
							echo "<td> &euro; ".$result["totaal"]."</td>";
							echo "</tr>";
					}
					?>
					</table>
					</div>
				</div>
			</section>
		<!-- Footer -->
			<footer id="footer">
				<div class="inner">
					<h2>Get In Touch</h2>
					<ul class="actions">
						<li><span class="icon fa-phone"></span> <a href="#">(000) 000-0000</a></li>
						<li><span class="icon fa-envelope"></span> <a href="#">information@untitled.tld</a></li>
						<li><span class="icon fa-map-marker"></span> 123 Somewhere Road, Nashville, TN 00000</li>
					</ul>
				</div>
				<div class="copyright">
					&copy; Untitled. Design <a href="https://templated.co">TEMPLATED</a>. Images <a href="https://unsplash.com">Unsplash</a>.
				</div>
			</footer>
		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>