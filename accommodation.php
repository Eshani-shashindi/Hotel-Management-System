<!--IT23163454
A.M.H.Navodya-->
<!DOCTYPE html>
<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accommodation Page</title>
	<link rel="stylesheet" type="text/css" href="css/accommodation.css">
    <style>
       body{
        background-image: url(images/bg1.png);
       }
       .box{
        width: 100px;
        height: 50px;
        position: relative;
        backdrop-filter: blur(4px);
        background: transparent;
        justify-content: center;
        align-items: center;
        color: aliceblue;
       }
       a{
        text-decoration: none;
        color: white;
       }
    </style>
</head>
<body>
    <?php include 'header.php'; ?>
<h1>Accommodation ....</h1>




<table style="width:100%">

<tr>
<th><h3>DELUXE</h3></th>
<th><h3>STANDARD</h3></th>
<th><h3>SUITE</h3></th>
</tr>

<tr>
<td><img src="images/1.jpg" class="img" alt="Pic of DELUXE"></td>
<td><img src="images/2.jpg" class="img" alt="Pic of STANDARD"></td>
<td><img src="images/3.jpg" class="img" alt="Pic of SUITE"></td>
</tr>
<tr>
<td class="pb box"><ul>
				<li><b>Stay Duration:</b> Guests can stay for a maximum of 7 days.</li>
                <li><b>Credit Card Offer:</b> Get 10% off when you book with select credit cards.</li>
                <li><b>Accommodation:</b> Accommodates up to 4 passengers with 2 queen-size beds.</li>
                <li><b>Food Options:</b> Choose between packages with or without food.</li>
                <li><b>Amenities:</b> Access to the swimming pool and dining available at the on-site restaurant or through room service.</li>
				</ul>
</td>

<td class="pb box"><ul>
               <li><b>Stay Duration:</b> Guests can stay for a maximum of 5 days.</li>
               <li><b>Credit Card Offer:</b> Enjoy a 5% discount when you book using specific credit cards.</li>
               <li><b>Accommodation:</b> Designed for up to 2 passengers with 1 king-size bed.</li>
               <li><b>Food Options:</b> Available with or without food packages.</li>
               <li><b>Amenities:</b> Access to the swimming pool and dining options at the on-site restaurant or through room service.</li>
			   </ul>
</td>
<td class="pb box"><ul>
               <li><b>Stay Duration:</b> Guests can stay for a maximum of 10 days.</li>
               <li><b>Credit Card Offer:</b> Receive a 15% discount when booking with eligible credit cards.</li>
               <li><b>Accommodation:</b> Suitable for up to 6 passengers across 3 bedrooms: 1 king-size bed, 1 queen-size bed, and 2 twin beds.</li>
               <li><b>Food Options:</b> Choose between packages with or without food.</li>
               <li><b>Amenities:</b> Access to the swimming pool and dining available at the on-site restaurant or through room service.</li>
               </ul>
</td>
</tr>
<tr>
<th><button type="button" class="bk"><a href="#">BOOKING</a></button></th>
<th><button type="button" class="bk"><a href="#">BOOKING</a></button></th>
<th><button type="button" class="bk"><a href="#">BOOKING</a></button></th>
</tr>


</table>
</form>
<?php include 'footer.php'; ?>
</body>
</html>