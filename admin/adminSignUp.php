<!DOCTYPE HTML>
<html>
	<head>
		<title>Admin SignUp</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="../assets/css/main.css" />
		<link rel="stylesheet" type="text/css" href="../assets/css/custom.css">
	</head>

	<body class="subpage">

		<!-- Header -->
			<header id="header">
				<div class="logo"><a href=" ">Hotel Rose Palase</a></div>
			</header>

		<!-- One -->
			<section id="One" class="wrapper style3">
				<div class="inner">
					<header class="align-center">
						<p>Batter place to stay</p>
						<h2>Hotel Rose Palase</h2>
					</header>
				</div>
			</section>

			<div class="slide">
				<h3><b style="color: red;"><marquee behavior="scroll" direction="left">***This is a restricted area. If you are not an admin please leave this place or we will block your IP permanently.***</marquee></b></h3>
			</div>

			<h2 id="elements" align="center" style="margin-top: 50px; font-size: 200%;">SignUp For Admin</h2>
		<!-- Main -->
			<div id="main" class="container">

				<!-- Elements -->
				<div class="row 200%" >
					<div class="6u$ 12u$(medium)">
							<!-- Form -->
						<h2>Admin Details</h2>
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
										Address<input type="text" name="add" id="address" placeholder="PermanentAddress" required />
									</div>

									<div class="12u$">
										Password<!--input type="Password" name="pass1" id="address" placeholder="Password" required /-->

										<input type="password" name="pass1" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" id="address" placeholder="Password" required />
									</div>

									<div class="12u$">
										Confirm Password<!--input type="Password" name="pass2" id="address" placeholder="ConfirmPassword" required /-->

										<input type="password" name="pass2" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" id="address" placeholder="ConfirmPassword" required />
									</div>

									<div class="12u$">
										<ul class="actions">
											<li><input type="submit" name="submit" value="Submit" /></li>
											<li><input type="reset" value="Reset" class="alt" /></li>
										</ul>
									</div>
								</div>
								<div class="php">
										<?php
											include('../connect.php');
											if(isset($_POST['submit'])){
												$name=$_POST['name'];
												$mail=$_POST['mail'];
												$contact=$_POST['cont'];
												$add=$_POST['add'];
												$pass=$_POST['pass1'];
												$c_pass=$_POST['pass2'];
												if($pass==$c_pass){
													$query = "INSERT into admin(name, email, contact, address, password) 
													values('$name', '$mail', '$contact', '$add', '$pass');";

											  
											  		$result = mysqli_query($conn, $query); // query er maddhome database er vitore jaoa 

											  		if($result)
											  		{
											  			header("location:index.php");
											  		}else{
											  			echo "<h5>Try Again...</h5>";
											  		}
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
