<!--IT23157132 J.A.S.R.Jayakody-->

<?php

require 'config.php';

$eid=$_POST["id"];
$edesignation=$_POST["designation"];
$ename=$_POST["name"];
$eemail=$_POST["email"];
$contact=$_POST["contact"];

$que2="UPDATE admin SET Designation='$edesignation',Name='$ename',Email='$eemail',Contact='$contact' where ID='$eid'";

if($con->query($que2)){
    echo "Update Successful";
}
else{
    echo "Error";
}
$con->close();
?>