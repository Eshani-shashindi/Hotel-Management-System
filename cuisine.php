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
			
			<script src="script/cuisine.js"></script>
			
		</head>
		
		<body><center><div>
			<form name="frm1" id="frm1" action="cuisineInsert.php" method="post">
			
			<fieldset>
				<legend align="center">Cuisine Booking</legend>
				
				
					<label for "userID">Enter User ID :</label>&nbsp &nbsp
						<input type="text" name="txt1" id="txt1" maxlength="4" class="text4" value="" placeholder="000" required><br><br>
			
			
			
					<label for="cuisineType"> Select cuisine type:</label>&nbsp &nbsp
						<select name="CuisineType" id="CuisineType" class="text4" required>
							<option value="breakfast">Breakfast</option>
							<option value="lunch">Lunch</option>
							<option value="dinner">Dinner</option>
							
						</select>
			
				<br><br>
				
				
					<label for="CuisineBookingDate"> Select the date:</label>&nbsp &nbsp
						<input type="date" id="cuisineDate" name="cuisineDate" class="text4" required>
			
			
				<br><br>
				
				<label for="confirm"> Please confirm your booking:</label>&nbsp &nbsp
						<input type="checkbox" id="chk1" name="chk1" value="c" class="text4" required> 
						
			
				<br><br>
				
				
					<input type="submit" name="submit1" id="submit1" value="Submit" class="text4" >
					&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
					<input type ="reset" class="text4">
				
			</fieldset>
			
			</form>
			</div>
			</center>
			<script>
				MessegeOnClick();
			</script>
		
		</body>
	</html>