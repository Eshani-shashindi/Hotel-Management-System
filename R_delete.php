<!--IT23157132 J.A.S.R.Jayakody-->

<?php
require "config.php";

$eid=$_POST["id"];

$que3="DELETE from admin WHERE ID='$eid'";

if($con->query($que3))
{
    echo "successfuly Deleted";
}
else
{
    echo"Error";
}
$con->close();
?>