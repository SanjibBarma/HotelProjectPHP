<!DOCTYPE html>
<html>
<head>
	<title>Double Image</title>
</head>
<body>

<center>
	<table border='1'>
	<?php
		include('connect.php');
		$result = mysqli_query($conn, "SELECT * FROM `product` WHERE s_type = 'Double A/C' OR s_type = 'Double Non A/C' ORDER BY id DESC")or die("Error: " . mysqli_error($conn));
		$num_rows=mysqli_num_rows($result);
		$cntr = 0;
		echo '<tr>';
		while($row = mysqli_fetch_array($result)) {
		   $cntr++;
		   echo '
		      <td width="1000px" height="600px">
		         <div class="image" width="600px" height="400px">
		            <img style="width:1000px; height: 700px;" src = "admin/images/'.$row['image'].' ">
		         </div>
		         <div class="service_Code"><strong>Code: </strong>'.$row['s_code'].'</div>
		         <div class="service_Type"><strong>Type: </strong>'.$row['s_type'].'</div>
		         <div class="service_Price"><strong>Price: </strong>'.$row['pricce'].'</div>
		         <div class="service_Discription"><strong>Discription: </strong>'.$row['discription'].'</div>
		      </td>';
		   if ($cntr % 3 == 0 && $cntr != $num_rows)
		      echo '</tr><tr>';

		    echo "</tr>";
		}

		?>
	</table>
</center>

</body>
</html>