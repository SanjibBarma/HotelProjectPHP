<!DOCTYPE HTML>
<html>
	<head>
		<title>Update Service</title>
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
			
			<h2 id="elements" align="center" style="margin-top: 10px;">Keep Update your Service</h2>

			<div id="main" class="container">

				<!-- Elements -->
				<div class="row 200%" >
					<div class="6u$ 12u$(medium)">
							<!-- Form -->
						<h2>Service Updating</h2>
							<form method="post" action=" " enctype="multipart/form-data">
								<div class="row uniform">

									<div class="12u$">
										<!--input type="hidden" name="size" value="1000000">
								        Image <input type="file" name="images" id="image"-->
								        Image <input type="file" name="pic" accept="image/">
									</div>

									<div class="12u$">
										Service Code<input type="text" name="s_code" id="serviceCode" placeholder="SecviceCode" required />
									</div>

									<div class="12u$">
										Service Type
										<SELECT name="s_type" id="service">
											<OPTION Value="Single Non A/C">Single Non A/C</OPTION>
											<OPTION Value="Single A/C">Single A/C</OPTION>
											<OPTION Value="Double Non A/C">Double Non A/C</OPTION>
											<OPTION Value="Double A/C">Double A/C</OPTION>
										</SELECT>
									</div>

									<div class="12u$">
										Price<input type="text" name="price" id="price" placeholder="ServicePrice /=" required />
									</div>

									<div class="12u$">
										Service Disription<textarea name="disc" id="disription" placeholder="Write A discription about this service..." rows="6" required ></textarea>
									</div>

									<div class="12u$">
										<ul class="actions">
											<li><input type="submit" name="submit" value="Update" /></li>
											<li><input type="reset" value="Reset" class="alt" /></li>
										</ul>
									</div>
								</div>
								<div class="php">
										<?php
							    			$msg = "";
							    			if(isset($_POST['submit'])){
							            	// the path to store the upload image
							             	$target = "images/".basename($_FILES['pic']['name']);
							              	//connect database
							              	//get all the data from the form
							              	$image = $_FILES['pic']['name'];
							              	$s_code = $_POST['s_code'];
							              	$s_type = $_POST['s_type'];
							              	$price = $_POST['price'];
							              	$disc = $_POST['disc'];
							    
							   	           	$sql = "INSERT INTO product (image,s_code,s_type,pricce,discription)"."VALUES ('$image','$s_code','$s_type','$price','$disc')";
							   	           	mysqli_query($conn,$sql);
							    	         //moving the uploaded file to the image folder
							        	    	if(move_uploaded_file($_FILES['pic']['tmp_name'],$target)){
							            	    	$msg = "image uploaded successfully";
							              		}else{
							                		$msg = "image not uploaded";
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
