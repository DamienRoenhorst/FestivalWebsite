<?php session_start();
print_r($_SESSION) ?>

<!DOCTYPE HTML>
<!--
	Intensify by TEMPLATED
	templated.co @templatedco
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html>
	<head>
		<title>Intensify by TEMPLATED</title>
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
				<a href="index.html" class="logo">GCFestival</a>
				<nav class="right">
					<?php if(isset($_SESSION["login"]) == true){
					$login = "<li><a href='login/uitloggen.php' class='button fit'>Uitloggen</a></li>";
					echo $login;
					}else{
						$login = "<li><a href='login/login.php' class='button fit'>Login</a></li>";
						echo $login;
					}?>
				</nav>
			</header>

		<!-- Menu -->
			<nav id="menu">
				<ul class="links">
					<li><a href="index.html">Home</a></li>
					<li><a href="register/register.html">Registreer</a></li>
					<li><a href="#two">Tickets</a></li>

				</ul>
				<ul class="actions vertical">
					<?php if(isset($_SESSION["login"]) == true){
					$login = "<li><a href='login/login.php' class='button fit'>Login</a></li>";
					echo $login;
					}else{
						$uitloggen = "<li><a href='login/login.php' class='button fit'>Uitloggen</a></li>";
						echo $uitloggen;
					}
					?>
				</ul>
				
			</nav>

		<!-- Banner -->
			<section id="banner">
				<div class="content">
					<ul class="actions">
						<li><a href="#two" class="button scrolly">Bestel uw tickets</a></li>
					</ul>
				</div>
			</section>

		<!-- One -->
			<section id="one" class="wrapper">
				<div class="inner flex flex-3">
					<div class="flex-item left">
						<div>
							<h3>6 Maart 2020</h3>
							<p>Morbi in sem quis dui plalorem ipsum</p>
						</div>
						<div>
							<h3>13 Maart 2020</h3>
							<p>Tristique yonve cursus jam nulla quam<br /> loreipsu gravida adipiscing lorem</p>
						</div>
					</div>
					<div class="flex-item image fit round">
						<img src="images/6.jpg" alt="" />
					</div>
					<div class="flex-item right">
						<div>
							<h3>20 Maart 2020</h3>
							<p>Sed adipiscing ornare risus. Morbi estes<br /> blandit sit et amet, sagittis magna.</p>
						</div>
						<div>
							<h3>27 Maart 2020</h3>
							<p>Pellentesque egestas sem. Suspendisse<br /> modo ullamcorper feugiat lorem.</p>
						</div>
					</div>
				</div>
			</section>
		<!-- Two -->
			<section id="two" class="wrapper">
				<div class="inner flex flex-3">
					<div class="flex-item box">
						<div class="image fit">
							<img src="images/ticket.png" alt="" />
						</div>
						<div class="content">
							<h3>Basic</h3>
							<p>€40.- per ticket</p>
						</div>
					</div>
					<div class="flex-item box">
						<div class="image fit">
							<img src="images/ticket.png" alt="" />
						</div>
						<div class="content">
							<h3>Premium</h3>
							<p>€60.- per ticket</p>
						</div>
					</div>
					<div class="flex-item box">
						<div class="image fit">
							<img src="images/ticket.png" alt="" />
						</div>
						<div class="content">
							<h3>VIP</h3>
							<p>€100.- per ticket</p>
						</div>
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