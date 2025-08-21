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
            <form method="post" action="CuisineDeletePHP.php">
			<fieldset>
			<legend align="center">Cuisine Update</legend>

			
			<label for "CID"  style="font-size:50px;">Enter Cuising Booking Id to confirm: </label>&nbsp &nbsp
                <input type="text" name="CID" id="CID" maxlength="4" required class="text4"><br>
               
				<center>
				<input type="submit" id="submit" name="submit" value="Delete" class="text4" style="background-color:red;">
				</center>
			</legend>
			</fieldset>
            </form>

			
        </body>
    </html>
            