<!--IT23164826
     DISANAYAKA E.S-->
<html>
<head>
<link rel="stylesheet" href="css/table.css">
</head>
<body>
 <h1 style="text-align:center;">Your Details</h1>
<table>
      <tr>
      <th>Id</th><th>FirstName</th><th>LastName</th><th>NIC</th><th>MobileNo</th><th>Email</th><th>password</th><th>Delete</th><th>Edit</th>
     </tr>
	

<?php
require 'config.php';

$ns=$_POST["NIC"];
$sql="SELECT userId,FirstName,LastName,NIC,MobileNo,Email,password FROM user where NIC='$ns'";

$RESULT=$con->query($sql);

if($RESULT->num_rows>0){
	
     /*echo "<table>";*/
	 
	 

    while($ROW=$RESULT->fetch_assoc())
    {
		if($ns=$ROW["NIC"]){
		}

	  echo"<tr>";
      echo"<td>".$ROW["userId"]."</td>"."<td>".$ROW["FirstName"]."</td>"."<td>".$ROW["LastName"]."</td>"."<td>".$ROW["NIC"]."</td>"."<td>".$ROW["MobileNo"]."</td>"."<td>".$ROW["Email"]."</td>"."<td>".$ROW["password"]."</td>";
	  
    
 
 

	  
	  echo"<td>"."<a href='EDeleteButton.php'>"."Delete"."</a>"."</td>";
	  echo"<td>"."<a href='Userprofile.php'>"."Edit"."</a>"."</td>";
	  echo"</tr>";
	 
	 }
}
	
 else
       {
            echo "No data";
        }

?>
</table>   
</body>
</html>