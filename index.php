<?php
include('connect.php');
?>
<!DOCTYPE HTML>
<html>
	<head>
		<title>Hotel Rose Palase</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<link rel="stylesheet" type="text/css" href="assets/css/custom.css">
	</head>
	<body>

		<!-- Header -->
			<header id="header" class="alt">
				<div class="logo"><a href="index.php">Hotel Rose Palase</span></a></div>
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

		<!-- Banner -->
			<section class="banner full">
				<article>
					<img src="images/hotel.jpg" alt="" />
					<div class="inner">
						<header>
							<p>A better place to Stay.</p>
							<h2>Hotel</h2>
						</header>
					</div>
				</article>
				<article>
					<img src="images/food.jpg" alt="" />
					<div class="inner">
						<header>
							<p>A better place to get Food.</p>
							<h2>Food</h2>
						</header>
					</div>
				</article>
				<article>
					<img src="images/travel.jpg"  alt="" />
					<div class="inner">
						<header>
							<p>A better place to get easy Transport.</p>
							<h2>Transport</h2>
						</header>
					</div>
				</article>
				<article>
					<img src="images/guide.jpg"  alt="" />
					<div class="inner">
						<header>
							<p>A better place to get Local Guide</p>
							<h2>Local Guide</h2>
						</header>
					</div>
				</article>
			</section>

		<!-- One -->
			<section id="one" class="wrapper style2">
				<div class="inner">
					<div class="grid-style">

						<div>
							<div class="box">
								<div class="image fit">
									<img src="images/double.jpg" alt="" />
								</div>
								<div class="content">
									<header class="align-center">
										<p>For family or couple.</p>
										<h2>Double Condition Room</h2>
									</header>
									<p>
										Are you looking for a double condition room for your family for a short/long time tour in Panchagarh? You are in the right place. Just ckick bellow the button and check your room services.
									</p>
									<footer class="align-center">
										<a href="double.php" class="button alt">Check Double</a>
									</footer>
								</div>
							</div>
						</div>

						<div>
							<div class="box">
								<div class="image fit">
									<img src="images/single.jpg" alt="NULL" />
								</div>
								<div class="content">
									<header class="align-center">
										<p>Only for one person.</p>
										<h2>Single Condition Room</h2>
									</header>
									<p>
										If you are looking for a suitable life to live in Panchagarh, then come and check our service. We can ensure you a better service with bed room, food, trevel, local guide and other service with a reasonable price.
									</p>
									<footer class="align-center">
										<a href="single.php" class="button alt">Check Single</a>
									</footer>
								</div>
							</div>
						</div>

					</div>
				</div>
			</section>

		<!-- Two -->
			<section id="two" class="wrapper style3">
				<div class="inner">
					<header class="align-center">
						<p>Check out our hotel and room service.</p>
						<h2>Hotel Rose Palase</h2>
					</header>
				</div>
			</section>

		<!-- Three -->
			<section id="three" class="wrapper style2">
				<div>
					<div class="image fit" width="100%">
						<a href="booking.php"><img src="<?php include('image.php');?>"></a>
					</div>
			</section>

				<footer class="align-center">
					<a href="single.php" class="button alt">Check Single</a>
					<a href="double.php" class="button alt">Check Double</a>
				</footer>


		<!-- Footer -->
			<footer id="footer">
				<div class="container">
					<h2>Stay Connect via SocialMedia</h2>
					<ul class="icons">
						<li><a href="#twitter.com" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
						<li><a href="#facebook.com" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
						<li><a href="#instagram.com" class="icon fa-instagram"><span class="label">Instagram</span></a></li>
						<li><a href="#gmail.com" class="icon fa-envelope-o"><span class="label">Email</span></a></li>
					</ul>
				</div>
				<div class="copyright">
					&copy; Utpal Kumar Roy. All rights reserved.
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