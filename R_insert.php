<!--IT23157132 J.A.S.R.Jayakody-->
<?php

require 'config.php'; //connecting config.php file


$edesignation=$_POST["designation"];
$ename=$_POST["name"];
$eemail=$_POST["email"];
$econtact=$_POST["contact"];

$que="INSERT INTO admin VALUES ('','$edesignation','$ename','$eemail','$econtact')";

if($con->query($que)) //executing the query
{
    echo "Insert Successful";
}
else{
    echo "Not Successful".$con->error; //display unsuccessful message with the error
}

$con->close();
?>