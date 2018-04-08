<?php
	include("../connect.php");
	session_start();
	//getting id of the data from url
	$id = $_GET['id'];


	//deleting the row from table
	$query = "DELETE FROM booking WHERE id = $id";
	$result = mysqli_query($conn, $query);

	//redirecting to the display page (index.php in our case)
	header("Location:home.php");
?>