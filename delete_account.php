<!--IT23164826
     DISANAYAKA E.S-->
<?php
session_start();
require 'config.php';

// Check if the user is logged in
if (!isset($_SESSION["TheLogin"]) || !isset($_SESSION["Login1"])) {
    header("Location: login.php");
    exit();
}

$userId = $_SESSION["Login1"];

// Delete the user from the database
$sql = "DELETE FROM user WHERE id = ?";
$stmt = $con->prepare($sql);
$stmt->bind_param("i", $userId);

if ($stmt->execute()) {
    session_destroy(); // Destroy the session
    header("Location: EDelete.php"); // Redirect to confirmation page
    exit();
} else {
    echo "Error: Unable to delete account.";
}
?>
<!DOCTYPE html>
	<html>
		<head>
		<title></title>
		 <title></title>
        <link rel="stylesheet" href="css/userLoginPage.css">
        <style>
            body{
                background-image: url('images/EUserProfileBg.jpg');
                background-size: cover;
                background-repeat: no-repeat;
            }
        </style>

		</head>

        <body>
            <form method="post" action="EDelete.php">
			     <input type="text" name="txt1" id="txt1" maxlength="4"  value="" placeholder="Id" required>
                <input type="submit" id="submit1" value="Delete">
				
                

            </form>
        </body>
    </html>