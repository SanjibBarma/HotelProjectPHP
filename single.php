<?php
include('connect.php');
?>

<!DOCTYPE HTML>

<html>
	<head>
		<title>About Rose Palace</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<link rel="stylesheet" type="text/css" href="assets/css/custom.css">
	</head>

	<body class="subpage">

		<!-- Header -->
			<header id="header">
				<div class="logo"><a href="index.php">Hotel Rose Palace</a></div>
				<a href="#menu">Menu</a>
			</header>

		<!-- Nav -->
			<nav id="menu">
				<ul class="links">
					<li><a class="nav1" href="index.php">Home</a></li>
					<li><a class="nav1" href="booking.php">Booking</a></li>
					<li><a class="nav1" href="about.php">About Us</a></li>
					<li><a class="nav1" href="contact.php">Contact Us</a></li>
					
			   	    <li class="dropdown"><a href="#">Other Service</a>
						  <div class="dropdown-content">
						    <a href="index.php">Food</a>
						    <a href="#">Travel</a>
						    <a href="#">Local Guide</a>
						  </div>
					</li>
				</ul>
			</nav>

		<!-- One -->
			<section id="One" class="wrapper style3">
				<div class="inner">
					<header class="align-center">
						<p>Batter Place to stay</p>
						<h2>Hotel Rose Palace</h2>
					</header>
				</div>
			</section>

		<!-- Two -->

			<section id="three" class="wrapper style2">
				<header class="align-center">
					<h2>Single Condition Room</h2>
				</header>
			</section>

			<section>
				<div align="center">
					<a style="text-decoration: none; color: black; font-size: 150%;" href="booking.php">
					    <?php include 'single_image.php' ;?>
					</a>
				</div>
			</section>

			<footer class="align-center">
					<a href="double.php" class="button alt">Check Double</a>
			</footer>

		<!-- Footer -->
			<footer id="footer">
				<div class="container">
					<h2>Stay Connect via SocialMedia</h2>
					<ul class="icons">
						<li><a href="#" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
						<li><a href="#" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
						<li><a href="#" class="icon fa-instagram"><span class="label">Instagram</span></a></li>
						<li><a href="#" class="icon fa-envelope-o"><span class="label">Email</span></a></li>
					</ul>
				</div>
				<div class="copyright">
					&copy; SANJIB BARMA. All rights reserved.
				</div>
			</footer>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>

