<!DOCTYPE html>
<html>
<head>
	<title>Image</title>
</head>
<body>
						<div class="image">
							<?php
							include('connect.php');
						        $sql = "SELECT * FROM product ORDER BY id DESC LIMIT 6";
						        $result = mysqli_query($conn,$sql);
						        while($row = mysqli_fetch_array($result)){
						            echo '<img src = "admin/images/'.$row['image'].'">'; 
						      }
						        ?>
						</div>
</body>
</html>