<?php
include('connect.php');
?>

<!DOCTYPE HTML>
<html>
	<head>
		<title>Contact</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" type="text/css" href="assets/css/main.css">
		<link rel="stylesheet" type="text/css" href="assets/css/custom.css">
	</head>

	<body class="subpage">

		<!-- Header -->
			<header id="header">
				<div class="logo"><a href="index.php">Hotel Rose Palase</a></div>
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
						    <a href="index.php">Travel</a>
						    <a href="index.php">Local Guide</a>
						  </div>
					</li>
				</ul>
			</nav>

		<!-- One -->
			<section id="One" class="wrapper style3">
				<div class="inner">
					<header class="align-center">
						<p>Batter place to stay</p>
						<h2>Hotel Rose Palase</h2>
					</header>
				</div>
			</section>
		<h2 id="elements" align="center" style="margin-top: 50px; font-size: 200%;">Contact With Us</h2>
		<!-- Main -->
			<div id="main" class="container">

				<!-- Elements -->
					<div class="row 200%">
						<div class="6u 12u$(medium)">
								<header>
									<h2>Hot lines</h2>
									<p>We are 24/7 open for you. Call for details.</p>
								</header>
								<p>10/2 Mosjid para, Islambag, Panchagarh</p>
								<strong>Mobile:</strong><p>0123456789 / 0123456789 / 0123456789</p>
								<strong>Telephone:</strong><p>0123456789 / 0123456789 / 0123456789</p>
								<strong>Email:</strong><p>site@email.com</p>
								
							<!-- Blockquote -->
								<h3>Quote</h3>
								<blockquote>“Travel makes one modest. You see what a tiny place you occupy in the world."<br>
								<p style="float: right;">Gustave Flaubert</p></blockquote>

						</div>

						<div class="6u$ 12u$(medium)">
							<!-- Form -->
								<h3>Via Website</h3>

								<form method="post" action>
									<div class="row uniform">
										<div class="6u 12u$(xsmall)">
											<input type="text" name="name" id="name" placeholder="YourName" required />
										</div>
										<div class="6u$ 12u$(xsmall)">
											<input type="text" name="cont" id="contact" placeholder="MobileNo / Email" required />
										</div>
										<div class="12u$">
											<textarea name="message" id="message" placeholder="Enter your message" rows="6" required ></textarea>
										</div>
										<!-- Break -->
										<div class="12u$">
											<ul class="actions">
												<li><input type="submit" name="submit" value="Send Message" /></li>
												<li><input type="reset" value="Reset" class="alt" /></li>
											</ul>
										</div>
									</div>

									<div class="php">
										<?php
											if(isset($_POST['submit'])){
												$name=$_POST['name'];
												$contact=$_POST['cont'];
												$m_text=$_POST['message'];

													$query =
													"INSERT into message(name,contact,m_date,m_text) 
													values('$name','$contact',now(),'$m_text'); ";

											  
											  		$result = mysqli_query($conn, $query); // query er maddhome database er vitore jaoa 

											  		if($result)
											  		{
											  			echo "<script> alert ('Your message has been sent to our Admin. We will contact With you soon. Thank you.') </script>";
											  		}else{
											  			echo "<script> alert ('Please try again...') </script>";
											  		}
												
											}
										?>
									</div>

								</form>

								<hr />
						</div>
					</div>

			</div>

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
