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
        <body>
            <form method="post" action="CuisineUpdatePHP.php">

			
			<fieldset>
			<legend align="center">Cuisine Update</legend>

			
			<label for "CID"> Enter CID :</label>&nbsp &nbsp
            <input type="text" name="CID" id="CID" maxlength="4" class="text4" placeholder="00" required ><br><br>

			<label for "txt1">Enter UserID :</label>&nbsp &nbsp
            <input type="text" name="txt1" id="txt1" maxlength="4" class="text4" placeholder="U000" required><br><br>
			
			
			<label for="cuisineType"> Select cuisine type:</label>&nbsp &nbsp
						<select name="CuisineType" id="CuisineType" class="text4" required>
							<option value="breakfast">Breakfast</option>
							<option value="lunch">Lunch</option>
							<option value="dinner">Dinner</option>
							
						</select>
             <br>

			 <label for="cuisineDate"> Select the date:</label>&nbsp &nbsp
            <input type="date" id="cuisineDate" name="cuisineDate" class="text4" required>
            <br>

			
			
            <input type="submit" id="submit" value="Update" class="text4" name="submit">
            &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
			<input type ="reset" class="text4">

			</fieldset>
            </form>
	
        </body>
    </html>