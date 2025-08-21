<?php
$servername = "localhost";
$username = "root";
$password = "";
$database="hotelelegance";
// Create connection
$con=new mysqli($servername, $username, $password,$database);
if($con->connect_error)// Check connection
{
    die("Connection error " . $con->connect_error);//print the error

}
/*else
{
    echo "Connection is sucessful";
}*/
?>