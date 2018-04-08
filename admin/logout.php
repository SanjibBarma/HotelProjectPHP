<?php
	session_start();
	session_destroy();

	echo "<script> alert('Your are logging Out.') </script>";
	header("Location: index.php");
?>
