<!--IT23157132 J.A.S.R.Jayakody-->

<!DOCTYPE html>
	<html>
		<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
			<title>
				Bookings
			</title>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
			
		<link rel="stylesheet" href="Styles/R_BookingStyles.css">
		<script src="script/R_js1.js"></script>
		</head>

	
	<body>
	<?php include 'header.php'; ?>
		<table border="0" width="100%">
			<tr>
				<td width="40%">
				<img src="Images\R_Dining.jpg" alt="image" class="size">
				</td>
				<td class="content">
				Come and get your dinning experience with us<span id="s1">...</span><span id="s2">We offer you a good variety of food for your breakfast,lunch and dinner.Enjoy the greatness</span><br>
				<button onclick="seeMore1()" id="btn1">Read more</button> 
				<br><br>
				<button onclick="confirm1()" class="btn1"><a href ="dinning.php" style="color:black;">Dining</a></button>
				</td>
			</tr>
			<tr>
				<td>
				<img src="Images\R_Accomodation.jpg" alt="image" class="size">
				</td>
				<td class="content">
				We offer range of options<span id="s3">.... </span><span id="s4">for our customers from single cozy room to suites.Enjoy yourself with comfort,peace and serenity.Expirience the greatness</span><br>
				<button onclick="seeMore2()" id="btn2">Read more</button>
				<br><br>
				<button onclick="confirm1()" class="btn1"><a href ="accommodation.php" style="color:black;">Accomodation</a></button>
				</td>
			</tr>
			<tr>
				<td>
				<img src="Images\R_Facilities.jpg" alt="image" class="size">
				</td>
				<td class="content">
				come and experience <span id="s5">....</span><span id="s6">our exclusive facilities.Our hotel is consist with gym,outdoor pool,out door activities,play area for kids and many more</span><br>
				<button onclick="seeMore3()" id="btn3">Read more</button>
				<br><br>
				<button onclick="confirm1()" class="btn1"><a href ="facility.php" style="color:black;">Facilities</a></a></button>
				</td>
			</tr>
		</table>
		<?php require "footer.php"?>
	</body>
</html>

