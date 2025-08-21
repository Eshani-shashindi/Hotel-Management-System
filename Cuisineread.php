<!--IT23157446 B.A.L.M.U. Bogoda Arachchi-->
<!DOCTYPE html>
	<html>
		<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
			<title>
				Reservation on dinning
			</title>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
			
			<link rel="stylesheet" href="css/cuisine.css">
            <link rel="stylesheet" href="css/cuisineAdmin.css">
			
			<script src="script/cuisine.js"></script>
			
			
		</head>
        
     <body>	
            
            <table border ="1" width="100%">

            <tr>
            <th> <b> <i> cuisineBookingId </i> </b> </th>
            <th><b> <i>userId </i> </b> </th>
            <th> <b> <i> CuisineType</i> </b> </th>
            <th> <b> <i> CDate </i> </b> </th>  
<?php
include_once 'Config.php';

$userId=$_POST["txt1"];
$sqlC = "SELECT id,userId,CuisineType,CuisineDate FROM cuisinebooking where userId='$userId' ";
$result = $con->query($sqlC);

echo "<h1>All Cuisine Reservations made by User : ";
echo $userId;
echo "</h1>";

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        
        if ($UserId=$row["userId"]){
        
        }
        echo "<tr><td>" . $row["id"] .
            "</td><td>" . $row["userId"] .
            "</td><td>" . $row["CuisineType"] .
            "</td><td>" . $row["CuisineDate"];
            echo "</tr>";
           
    }
} else {
    echo "empty rows";
}
?>


</table>

<br><br><br>
		<button class="b1"><a href='cuisine.php'>Add a New Cuisine Booking </a></button>
		<button class="b1"><a href='updateCuisine.php'>Update a Cuisine Booking </a></button>
        <button class="b1"><a href='deleteCuisine.php'>Delete a Cuisine Booking</a></button>
       <button class="b1"><a href='header.php'>Go to Home page</a></button>

</body>
</html>