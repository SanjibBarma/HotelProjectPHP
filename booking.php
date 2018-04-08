<!DOCTYPE HTML>
<html>
	<head>
		<title>Booking Form</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="assets/css/main.css" />
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
		<h1 id="elements" align="center" style="margin-top: 50px; font-size: 200%;">Book What You Want.</h1>
		<!-- Main -->

			<div id="main" class="container">

				<!-- Elements -->
				<div class="row 200%" >

					<div class="6u 12u$(medium)">
						<header>
								<h2>Payment System</h2>
								<p>This system will be updated soon.</p>
						</header>
						<p>
							Only Bkash and Rocket is available
						</p>
						<strong>Bikash:</strong><p>0123456789 / 0123456789</p>
						<strong>Bikash:</strong><p>0123456789 / 0123456789</p>

						<blockquote>
							You have to pay minimum 30% advance with an hour after fillup the booking from. Otherwise it will not in available list.<br>
							Carry your payment confermation message check in time. Thank You.
						</blockquote>
					</div>
					
					<div class="6u$ 12u$(medium)">
							<!-- Form -->
						<h2>Booking Form</h2>
							<form method="post" action=" " >
								<div class="row uniform">

									<div class="12u$">
										Name<input type="text" name="name" id="name" placeholder="YourName" required />
									</div>

									<div class="12u$">
										Emali<input type="text" name="mail" id="email" placeholder="YourEmail" required />
									</div>

									<div class="12u$">
										Contact<input type="text" name="cont" id="contact" placeholder="YourMobileNumber" required />
									</div>

									<div class="12u$">
										Permanent Address<input type="text" name="add1" id="address" placeholder="PermanentAddress" required />
									</div>

									<div class="12u$">
										Present Address<input type="text" name="add2" id="address" placeholder="PresentAddress" required />
									</div>

									<div class="12u$">
										Members<input type="text" name="mem" id="member" placeholder="HowManyWillCome" required />
									</div>

									<div class="12u$">
										Service Code<input type="text" name="s_code" id="service1" placeholder="ProductCode" required />
									</div>

									<div class="12u$">
										Service Type
										<SELECT name="s_type" id="service2">
											<OPTION Value="Single Non A/C">Single Non A/C</OPTION>
											<OPTION Value="Single A/C">Single A/C</OPTION>
											<OPTION Value="Double Non A/C">Double Non A/C</OPTION>
											<OPTION Value="Double A/C">Double A/C</OPTION>
										</SELECT>
									</div>

									<div class="12u$">
										Check In:   <input type="Date" name="cid" id="cid" placeholder="CheckInDate" required />
										Check Out:   <input type="Date" name="cod" id="cod" placeholder="CheckOutDate" required />
									</div>

									<div class="12u$">
										<ul class="actions">
											<li><input type="submit" name="submit" value="Book" /></li>
											<li><input type="reset" value="Reset" class="alt" /></li>
										</ul>
									</div>
								</div>
								<div class="php">
										<?php
											include('connect.php');
											if(isset($_POST['submit'])){
												$name=$_POST['name'];
												$mail=$_POST['mail'];
												$contact=$_POST['cont'];
												$add1=$_POST['add1'];
												$add2=$_POST['add2'];
												$member=$_POST['mem'];
												$service1=$_POST['s_code'];
												$service2=$_POST['s_type'];
												$cid=$_POST['cid'];
												$cod=$_POST['cod'];

													$query = "INSERT into booking(name,email,cont,add1,add2,member,service_c,service_t,check_in,check_out) 
													values('$name','$mail','$contact','$add1','$add2','$member','$service1','$service2','$cid','$cod');";

											  
											  		$result = mysqli_query($conn, $query); // query er maddhome database er vitore jaoa 

											  		if($result)
											  		{
											  			echo "<script> alert ('You have to pay minimum 30% advance with an hour after fillup the booking from. Otherwise it will not in available list.Carry your payment confermation message check in time. Thank You.') </script>";
											  		}else{
											  			echo "<script> alert ('Please try again...') </script>";
											  		}
											}
										?>
									</div>
							</form>
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