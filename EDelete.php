<!--IT23164826
     DISANAYAKA E.S-->
<?php
require 'config.php';

$userId = $_POST["txt1"];

$sql = "DELETE FROM user WHERE id='$userId'";

if ($con->query($sql)) {
    $message = "Deleted Successfully";
} else {
    $message = "Not successful: " . $con->error;
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Account Deletion</title>
    <style>
        body {
            background-image: url('images/EUserProfileBg.jpg');
            background-size: cover;
            background-repeat: no-repeat;
            font-family: Arial, sans-serif;
        }
        .container {
            max-width: 600px;
            margin: 100px auto;
            background: #fff;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0,0,0,0.2);
            text-align: center;
        }
        .container h1 {
            color: #333;
            font-size: 28px;
            margin-bottom: 20px;
        }
        .container p {
            font-size: 18px;
            color: #555;
        }
        .back-button a {
            display: inline-block;
            margin-top: 25px;
            text-decoration: none;
            padding: 10px 25px;
            background-color: #007BFF;
            color: #fff;
            border-radius: 5px;
            font-size: 16px;
        }
        .back-button a:hover {
            background-color: #0056b3;
        }
    </style>
    <meta http-equiv="refresh" content="2;url=home_page.php">
</head>
<body>
    <div class="container">
        <h1><?php echo $message; ?></h1>
        <div class="back-button">
            <a href="home_page.php">Return to Home Page</a>
        </div>
    </div>
</body>
</html>

<?php
$con->close();
?>
