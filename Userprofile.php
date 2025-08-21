
<!--IT23164826
     DISANAYAKA E.S-->
<?php
session_start();
require 'config.php';

// Check if the user is logged in
if (!isset($_SESSION["TheLogin"]) || !isset($_SESSION["Login1"])) {
    header("Location: login.php"); // Redirect to login page if not logged in
    exit();
}

// Fetch user details from the database
$userId = $_SESSION["Login1"];
$sql = "SELECT id,FirstName,MobileNo, Email FROM user WHERE id = ?";
$stmt = $con->prepare($sql);
$stmt->bind_param("i", $userId);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows === 1) {
    $user = $result->fetch_assoc(); // Fetch user details
} else {
    echo "Error: User not found.";
    exit();
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>User Profile</title>
    <link rel="stylesheet" href="css/userprofile.css">
    <style>
        body {
            background-image: url('images/EUserProfileBg.jpg');
            background-size: cover;
            background-repeat: no-repeat;
        }
        .profile-container {
            max-width: 600px;
            margin: 50px auto;
            background: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }
        .profile-container h1 {
            text-align: center;
            color: #333;
        }
        .profile-container p {
            font-size: 18px;
            margin: 10px 0;
            color: #555;
        }
        .profile-container p strong {
            color: #000;
        }
        .action-buttons {
            display: flex;
            justify-content: space-between;
            margin-top: 20px;
        }
        .action-buttons a {
            text-decoration: none;
            color: #fff;
            background-color: #007BFF;
            padding: 10px 20px;
            border-radius: 5px;
            font-size: 16px;
        }
        .action-buttons a:hover {
            background-color: #0056b3;
        }
        .delete-button {
            background-color: #FF0000;
        }
        .delete-button:hover {
            background-color: #CC0000;
        }
        .back-button {
            display: block;
            text-align: center;
            margin-top: 20px;
        }
        .back-button a {
            text-decoration: none;
            color: #fff;
            background-color: #007BFF;
            padding: 10px 20px;
            border-radius: 5px;
            font-size: 16px;
        }
        .back-button a:hover {
            background-color: #0056b3;
        }

        .profile-table {
    width: 50%;
    border-collapse: collapse;
    margin-top: 20px;
}
.profile-table th {
    text-align: left;
    background-color: #f2f2f2;
    width: 30%;
}
.profile-table td {
    width: 70%;
}

    </style>
</head>
<body>
    <?php require "Header.php"; ?>
<div class="profile-container" style="text-align: center;">
    <h1>Your Profile</h1>

    <table class="profile-table" border="1" cellpadding="10" cellspacing="0" style="margin: 0 auto;">
        <tr>
            <th>User ID</th>
            <td><?php echo htmlspecialchars($user['id'], ENT_QUOTES, 'UTF-8'); ?></td>
        </tr>
        <tr>
            <th>Name</th>
            <td><?php echo htmlspecialchars($user['FirstName'], ENT_QUOTES, 'UTF-8'); ?></td>
        </tr>
        <!--
        <tr>
            <th>Last Name</th>
            <td><?php echo htmlspecialchars($user['LastName'], ENT_QUOTES, 'UTF-8'); ?></td>
        </tr>
        <tr>
            <th>NIC</th>
            <td><?php echo htmlspecialchars($user['NIC'], ENT_QUOTES, 'UTF-8'); ?></td>
        </tr>
        -->
        <tr>
            <th>Mobile Number</th>
            <td><?php echo htmlspecialchars($user['MobileNo'], ENT_QUOTES, 'UTF-8'); ?></td>
        </tr>
        <tr>
            <th>Email</th>
            <td><?php echo htmlspecialchars($user['Email'], ENT_QUOTES, 'UTF-8'); ?></td>
        </tr>
    </table>

    <div class="action-buttons" style="margin-top: 20px;">
        <a href="EUpdate.php" class="edit-button">Edit Profile</a>
        <a href="delete_account.php" class="delete-button" onclick="return confirm('Are you sure you want to delete your account? This action cannot be undone.');">Delete Account</a>
    </div>

    <div class="back-button" style="margin-top: 10px;">
        <a href="home_page.php">Back to Home</a>
    </div>
</div>


    <?php require "footer.php"; ?>
</body>
</html>