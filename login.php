<!--IT23157446 B.A.L.M.U. Bogoda Arachchi-->

<html>
    <head>
        <title>Login to Hotel Elegance</title>
        <link rel="stylesheet" href="css/loginPage.css">
        <style>
            body {
                background-image: url("images/loginBackground.jpg");
            }
        </style>
    </head>
    <body>
        <div class="background2">
            <form action="loginPHP.php" method="post">
                <br><br>
                <h1>Login</h1>
                <br><br>
                <center>
                    <div class="textBox">
                        <!-- Only password field -->
                         <input type="email" name="email" placeholder="Enter your email" required>
                        <input type="password" name="password" placeholder="Password" required>
                    </div>
                    <br>
                </center>
                <div class="fogotPassword">
                    <a href="register.php">Forgot Password</a>
                </div>
                <br>
                <center>
                    <button type="submit" name="login" class="btn">Login</button>
                    <div class="registerPage">
                        <a href="register.php">
                            <p>Don't have an account? Create one</p>
                        </a>
                    </div>
                </center>
            </form>
        </div>
    </body>
</html>