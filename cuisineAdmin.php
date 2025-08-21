<!--IT23157446 B.A.L.M.U. Bogoda Arachchi-->
<!DOCTYPE html>
	<html>
		<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
			<title>
				Admin view on Cuisine Reservations
			</title>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
			
			<link rel="stylesheet" href="css/cuisine.css">
			<link rel="stylesheet" href="css/cuisineAdmin.css">
			
			<script src="script/cuisine.js"></script>
			
		</head>
<body>	
	<h1>Admin view on Cuisine Reservations</h1>	
<table border ="1" width="100%">

<tr>
<th> <b> <i> cuisineBookingId </i> </b> </th>
<th><b> <i>userId </i> </b> </th>
<th> <b> <i> CuisineType</i> </b> </th>
<th> <b> <i> CDate </i> </b> </th>

<?php
include_once 'Config.php';


$sql = "SELECT cuisineBookingId,userId,CuisineType,CDate FROM cuisinebooking";
$result = $con->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["cuisineBookingId"] .
            "</td><td>" . $row["userId"] .
            "</td><td>" . $row["CuisineType"] .
            "</td><td>" . $row["CDate"];
			echo "</tr>";
           
    }
} else {
    echo "empty rows";
}
?>
</table>
<br><br><br><br>


<br><br><br><br>
		<button class="b1"><a href='cuisine.php'>Add a New Cuisine Booking </a></button>
		<button class="b1"><a href='updateCuisine.php'>Update a Cuisine Booking </a></button>
        <button class="b1"><a href='deleteCuisine.php'>Delete a Cuisine Booking</a></button>
		
</body>
</html>