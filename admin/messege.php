<!DOCTYPE HTML>
<html>
	<head>
		<title>Customer Message</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="../assets/css/main.css" />
		<link rel="stylesheet" type="text/css" href="../assets/css/custom.css">
	</head>

	<body class="subpage">

		<!-- Header -->
			<header id="header">
				<b style="font-size: 120%;">Admin:</b>
				<b style="font-size: 120%;"><?php
					include('../connect.php');
					session_start();
			    	if(isset($_SESSION['loggedid'])){
			        	$sql="SELECT * FROM admin WHERE id='$_SESSION[loggedid]'";
			      		$res=mysqli_query($conn,$sql);
			      		$row=mysqli_fetch_assoc($res);
			      		$a=$row['name'];
			      			echo $a;
			      		}else{
			        		echo "Name";
			      		}
					?></b>
				<div class="logo">
					<a href="home.php">Home</a> ||
					<a href="messege.php">Message</a> ||
					<a href="detail.php">Customer Details</a> ||
					<a href="update.php">Update</a> ||
					<a href="logout.php" onclick="return confirm('Are you sure you want to Logout?')">LogOut</a>
				</div>
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
			
			<h2 id="elements" align="center" style="margin-top: 10px;">Message From Customer</h2>
		<!-- Main -->
			<div id="main" class="container">
				<!-- Elements -->
				<div class="row 200%" >
					<div class="php">
						<?php
							include('../connect.php');
							$sql = "SELECT * FROM message ORDER BY id DESC";
							$result = $conn->query($sql);

							if ($result->num_rows > 0) {
							    // output data of each row
							    while($row = $result->fetch_assoc()) {
							        echo "  <strong><u>Date: </u></strong>" . $row["m_date"]. "<br> ";
							        echo "  <strong><u>Name: </u></trong>" . $row["name"]. "<br> ";
							        echo "<strong><u>Contact: </u></strong>" . $row["contact"]. "<br> ";
							        echo "<strong><u>Message: </u></strong>" . $row["m_text"]. "<br> <br> <br>";
							    }
							  }
							?>
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
