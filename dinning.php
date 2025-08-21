<!--IT23157446 B.A.L.M.U. Bogoda Arachchi-->
<!DOCTYPE html>
	<html>
		<head>
		
			 
		
		<meta charset=" UTF-8 ">
		<meta name="keywords" content="foods,buffet,dinning,cuisine">
		<meta name="viewport" content="width=device-width,initial-scale= 1.0">
			<title>
				Dinning Information
			</title>
		<meta http-equip="X-UA-Compatible" content="IE=edge">
			
					<link rel="stylesheet" href="css/dinning.css">
					
					
					<script src="script/dinning.js"></script>
					
					
		</head>
	
			<body>
			<div class="div1">
			<?php include 'header.php'; ?>
			
		
					<table border="0" width="100%"  class="tableL">
					<tr>
							<br><br>
							<hr>
			
							<h1>
								THE CULINARY CORNER
								<br> 
								<hr>
								
							</h1>

							<p id="paraText1" onmouseover="changecolor('bisque')" onmouseout="changecolor('white')">Hotel Elegance's <font class="change1">CULINARY CORNER" </font> provides a wide variety of dinning options according to your preference all day and night.<br>
								You can enjoy the <font class="change1"> CULINARY CORNER </font> 's exquisite everyday buffet along with the special High-tea buffet.<br>
								Your best ever dinning experience is one-click away.<br>
									
									<b>
										WE GOT YOUR HUNGER COVERED!
									</b>
								
							</p>
							
							<p align="center"  class="imageP">
							
								<img src="images/Lhotel1.png" width=12% alt="image">
								<img src="images/Lhotel2.jpg" width=12% alt="image">
								<img src="images/Lhotel3.png" width=12% alt="image">
								<img src="images/Lhotel4.jpg" width=12% alt="image">
								
							
							</p>
							<br>
							<br>
							<br>
							<hr>
								<center  class="center2"><h2>Flavours Of Sunrise</h2></center> <hr>
					</tr>
					<tr>
							<td class="imageL">
								<img src="images/breakfast.png" width=25% alt="image">
							</td>
							
							<td>
							<center class="center1"><font id="text2">
								Welcome to our Breakfast buffet - Flavours Of Sunrise.<br>
								You can start your day with a healthy and fresh morning meal.
								
								Our Breakfast Menu includes rice and curry, hoppers, string hoppers, sandwiches and many other popular dishes.
								Includes delicious special desserts.
								<br>
								<b>Price - Rs.2000 per person</b>
							</font></center>
							</td>
							
							
							
					</tr>
						
			
					</table>
					
					<center>
						<button class="text3" id="dinnerButton">
							<a href="cuisine.php">Book now</a>
						</button>
					</center>
				
				<br><br>
				<hr>
				
				
				<center class="center2"><h2>Flavours Of Noon</h2></center>
				<hr>
				<table border="0" width="100%" class="tableL">
						<tr>
							<td class="imageL">
								<img src="images/lunch.png" width=25% alt="image">
							</td>
							
							<td>
								<center class="center1"><font id="text2" >
									Welcome to our Lunch buffet - Flavours Of Noon. <br>
									You can continue your day with a energetic and calory-free day meal.
								
									Our Lunch buffet includes rice and curry, Indian foods, Tai foods and many other popular breakfast menu items.
									Includes delicious special desserts.
									<br>
									<b>Price - Rs.2000 per person</b>
								</font></center>
							</td>
							
							
						</tr>
					</table>
					
					<center>
						<button class="text3" id="dinnerButton">
							<a href="cuisine.php">Book now</a>
						</button>
					</center>
					
				<br><br><br>
				<hr>
				
				
				<center class="center2"><h2>Flavours Of The Evening </h2></center><hr></center>
				
				<table border="0" width="100%"  class="tableL">
						<tr>
							<td class="imageL">
								<img src="images/dinner.png" width=25% alt="image">
							</td>
							
							
							<td>
								<center class="center1"><font id="text2" >
									Welcome to our dinner buffet - Flavours Of The Evening.<br>
									You can end your day with a gourmet and exquisite night dish.
									
									The Dinner buffet includes rice and curry, sushie, koththu, Biriyani and many other popular breakfast menu items.
									Includes delicious special desserts.
									<br>
									<b>Price - Rs.2000 per person</b>
								</font></center>
							</td>
							
							
						</tr>
					</table>
					
					<center>
						<button class="text3" id="dinnerButton">
							<a href="cuisine.php">Book now</a>
						</button>
					</center>
					
				<br><br><br><br><br><br>

			<center><form action="Cuisineread.php" method="post" class="Userview">
			<label for "userID">Enter User ID to see your previous bookings:</label>&nbsp &nbsp
						<input type="text" name="txt1" id="txt1" maxlength="4" class="text4" value="" placeholder="U000" required><br><br>

						<input type="submit" id="submit1" value="Submit" class="text4" >
					&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
					<input type ="reset" class="text4">
			</form></center><br><br><br><br>
				</div>
			</body>
			
		<?php include 'footer.php'; ?>
	
	</html>
	
	
	
	