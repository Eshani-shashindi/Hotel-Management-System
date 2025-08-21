
<!--IT23157446 B.A.L.M.U. Bogoda Arachchi-->
<?php
require 'config.php';

if (isset($_POST["login"])) {
    $email = $_POST["email"];       // get email from form
    $password = $_POST["password"]; // get password from form

    // Get user by email
    $sql = "SELECT id, password FROM user WHERE email = ?";
    $stmt = $con->prepare($sql);
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows === 1) {
        $row = $result->fetch_assoc();
        $hashedPassword = $row["password"];

        // Check password
        if (password_verify($password, $hashedPassword)) {
            session_start();
            $_SESSION["TheLogin"] = true;
            $_SESSION["Login1"] = $row["id"];

            header("Location: home_page.php");
            exit();
        } else {
            header("Location: login.php?Error=InvalidPassword");
            exit();
        }
    } else {
        header("Location: login.php?Error=UserNotFound");
        exit();
    }
}

$con->close();
?>
