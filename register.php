<?php
session_start(); // Start the session
if (!isset($_SESSION['csrf_token'])) {
    $_SESSION['csrf_token'] = bin2hex(random_bytes(32)); // Generate a CSRF token
}
?>
<html>
    <head>
        <title>Register</title>
        <link rel="stylesheet" href="css/Register.css">
        <style>
            body {
                background-image: url("images/EregisterBackground.jpg");
            }
            table {
                border-spacing: 0 10px;
                column-gap: 5px;
                margin-left: auto;
                margin-right: auto;
            }
        </style>
    </head>
    <body>
        <div class="background1">
            <form action="Einsert.php" method="post">
                <h1>Create an account</h1>
                <!-- Include the CSRF token in the form -->
                <input type="hidden" name="csrf_token" value="<?php echo $_SESSION['csrf_token']; ?>">
                <div class="input1">
                    <table>
                        <tr>
                            <td>
                                <input type="text" placeholder=" Name" name="firstName" required id="firstName" aria-label="First Name">
                            </td>
                        </tr>
                        <!--<tr>
                            <td>
                                <input type="text" placeholder="Last Name" name="lastName" required id="lastName" aria-label="Last Name">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <input type="text" placeholder="NIC" name="NIC" required id="NIC" maxlength="12" aria-label="NIC">
                            </td>
                        </tr>-->
                        <tr>
                            <td>
                                <input type="email" name="email" placeholder="Email" id="email" required aria-label="Email">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <input type="tel" placeholder="Mobile Number" name="MobileNumber" id="mobileNumber" required maxlength="10" aria-label="Mobile Number">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <input type="password" placeholder="Password" name="password" id="password" required aria-label="Password">
                            </td>
                        </tr>
                    </table>
                    <div class="text3">
                        <input type="checkbox" id="terms" required name="Agree to terms & Conditions">
                        <label for="terms">Agree to terms & conditions</label>
                    </div>
                    <div class="loginPage">
                        <center>
                            <button type="submit" class="btn">Create Account</button>
                        </center>
                    </div>
                    <div class="text2">
                        <a href="login.php">
                            <p><center>Already have an Account? Login</center></p>
                        </a>
                    </div>
                </div>
            </form>
        </div>
    </body>
</html>