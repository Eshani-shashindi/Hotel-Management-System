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
      <th>UserId</th><th>FirstName</th><th>LastName</th><th>NIC</th><th>MobileNo</th><th>Email</th><th>password</th><th>Delete</th><th>Edit</th>
     </tr>
	

<?php
require 'config.php';

$ns=$_POST["userId"];
$sql="SELECT userId,FirstName,LastName,NIC,MobileNo,Email,password FROM user where userId='$ns'";

$RESULT=$con->query($sql);

if($RESULT->num_rows>0){
	
    while($ROW=$RESULT->fetch_assoc())
    {
		if($ns=$ROW["userId"]){
		}
      /*echo"<tr>";
      echo"<th>"."UserId"."</th>"."<th>"."FirstName"."</th>"."<th>"."LastName"."</th>"."<th>"."MobileNo"."</th>"."<th>"."Email"."</th>"."<th>"."password"."</th>";
      echo"</tr>";*/
	  
	   
      echo"<tr>";
      echo"<td>".$ROW["userId"]."</td>"."<td>".$ROW["FirstName"]."</td>"."<td>".$ROW["LastName"]."</td>"."<td>".$ROW["NIC"]."</td>"."<td>".$ROW["MobileNo"]."</td>"."<td>".$ROW["Email"]."</td>"."<td>".$ROW["password"]."</td>";
    }
 }
	 ?>
	  
	  <td><a href="DeleteButton.php">Delete</a></td>
	  <td><a href="User Login.php">Edit</a></td>
	  </tr>
	  
    
<!--else
       {
            echo "No data";
       }-->
	   


</table> 
</body>
</html>