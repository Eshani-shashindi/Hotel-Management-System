<!--IT23157446 B.A.L.M.U. Bogoda Arachchi-->
<?php

	require 'config.php';
	$userId=$_POST["txt1"];
	$CuisineType=$_POST["CuisineType"];
	$cuisineDate=$_POST["cuisineDate"];
	
	$SqlCode="INSERT INTO cuisinebooking VALUES('','$userId','$CuisineType','$cuisineDate')";

	if(mysqli_query($con,$SqlCode)){
			echo "<script>alert('succesfully inserted')</script>";
			
			
		}
	
		else
		{
			echo "<script>alert('There is an error')</script>";	
		}

		include 'Cuisineread.php';
		
	mysqli_close($con);

?>
