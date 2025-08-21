<!--IT23164826
     DISANAYAKA E.S-->

<?php
require 'config.php';
session_start();

// Validate CSRF token
if (!isset($_POST['csrf_token']) || !isset($_SESSION['csrf_token']) || $_POST['csrf_token'] !== $_SESSION['csrf_token']) {
    die("Invalid CSRF token.");
}

// Sanitize and validate inputs
$FirstName = htmlspecialchars($_POST["firstName"], ENT_QUOTES, 'UTF-8');
$LastName = htmlspecialchars($_POST["lastName"], ENT_QUOTES, 'UTF-8');
$NIC = htmlspecialchars($_POST["NIC"], ENT_QUOTES, 'UTF-8');
$MobileNo = htmlspecialchars($_POST["MobileNumber"], ENT_QUOTES, 'UTF-8');
$Email = filter_var($_POST["email"], FILTER_SANITIZE_EMAIL);
$Password = password_hash($_POST["password"], PASSWORD_BCRYPT);

// Check for duplicate email
$checkEmailSql = "SELECT * FROM user WHERE email = ?";
$stmt = $con->prepare($checkEmailSql);
$stmt->bind_param("s", $Email);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    die("Error: Email already exists.");
}

// Insert user into the database using prepared statements
$Sql = "INSERT INTO user (FirstName, LastName, NIC, MobileNo, Email, Password) VALUES (?, ?, ?, ?, ?, ?)";
$stmt = $con->prepare($Sql);
$stmt->bind_param("ssssss", $FirstName, $LastName, $NIC, $MobileNo, $Email, $Password);

if ($stmt->execute()) {
    // Redirect to login page after successful registration
    header("Location: login.php");
    exit(); // Ensure no further code is executed
} else {
    echo "Error: " . $stmt->error;
}

$stmt->close();
$con->close();
?>
