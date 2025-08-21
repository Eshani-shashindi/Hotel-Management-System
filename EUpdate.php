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

// Fetch user details
$sql = "SELECT FirstName, MobileNo, Email FROM user WHERE id = ?";
$stmt = $con->prepare($sql);
$stmt->bind_param("i", $userId);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows === 1) {
    $user = $result->fetch_assoc();
} else {
    echo "Error: User not found.";
    exit();
}

// Handle form submission
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $firstName = htmlspecialchars($_POST["FirstName"], ENT_QUOTES, 'UTF-8');
    $mobileNo = htmlspecialchars($_POST["MobileNo"], ENT_QUOTES, 'UTF-8');
    $email = filter_var($_POST["Email"], FILTER_SANITIZE_EMAIL);

    $updateSql = "UPDATE user SET FirstName = ?, MobileNo = ?, Email = ? WHERE id = ?";
    $updateStmt = $con->prepare($updateSql);
    $updateStmt->bind_param("sssi", $firstName, $mobileNo, $email, $userId);

    if ($updateStmt->execute()) {
        // Redirect back to profile after saving
        header("Location: Userprofile.php");
        exit();
    } else {
        echo "Error: Unable to update profile.";
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Edit Profile</title>
    <link rel="stylesheet" href="css/userprofile.css">
    <style>
        body {
            background-image: url('images/EUserProfileBg.jpg');
            background-size: cover;
            background-repeat: no-repeat;
            font-family: Arial, sans-serif;
        }
        .profile-container {
            max-width: 600px;
            margin: 50px auto;
            background: #fff;
            padding: 25px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.2);
        }
        .profile-container h1 {
            text-align: center;
            color: #333;
        }
        .profile-container label {
            display: block;
            margin-top: 15px;
            font-weight: bold;
            color: #555;
        }
        .profile-container input {
            width: 100%;
            padding: 10px;
            margin-top: 5px;
            border-radius: 5px;
            border: 1px solid #ccc;
            font-size: 16px;
        }
        .action-buttons {
            display: flex;
            justify-content: space-between;
            margin-top: 20px;
        }
        .action-buttons button {
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
        }
        .save-button {
            background-color: #007BFF;
            color: #fff;
        }
        .save-button:hover {
            background-color: #0056b3;
        }
        .back-button {
            display: block;
            text-align: center;
            margin-top: 20px;
        }
        .back-button a {
            text-decoration: none;
            color: #fff;
            background-color: #28a745;
            padding: 10px 20px;
            border-radius: 5px;
        }
        .back-button a:hover {
            background-color: #218838;
        }
    </style>
</head>
<body>
    <?php require "Header.php"; ?>

    <div class="profile-container">
        <h1>Edit Your Profile</h1>
        <form method="post">
            <label> Name:</label>
            <input type="text" name="FirstName" value="<?php echo htmlspecialchars($user['FirstName'], ENT_QUOTES, 'UTF-8'); ?>" required>

            <label>Mobile Number:</label>
            <input type="text" name="MobileNo" value="<?php echo htmlspecialchars($user['MobileNo'], ENT_QUOTES, 'UTF-8'); ?>" required>

            <label>Email:</label>
            <input type="email" name="Email" value="<?php echo htmlspecialchars($user['Email'], ENT_QUOTES, 'UTF-8'); ?>" required>

            <div class="action-buttons">
                <button type="submit" class="save-button">Save</button>
            </div>
        </form>
        <div class="back-button">
            <a href="Userprofile.php">Back to Profile</a>
        </div>
    </div>

    <?php require "footer.php"; ?>
</body>
</html>
