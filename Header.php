<!--IT23157132 J.A.S.R.Jayakody-->
<html>
    <head>
        <title>   header  </title>
        <link rel = "stylesheet" href ="css/header.css">
        <style>
            .tableH{
                background-image: url('images/Headerbg.jpg');
                width: 100%;
                background-size: cover;
                background-repeat: no-repeat;
                border-collapse: collapse;
            }

            th{
                font-family: Arial, Helvetica, sans-serif;
                font-size: 16px;
            }

            a{
                text-decoration: none;
            }
            
        </style>
    </head>

    <body>
        <header>
        <table border = "0px" class="tableH" width="100%">
            <tr>
                <th style = "width: 30%;">
                    <a href="header.php">
                        <img src ="images/logo1.PNG" alt ="Hotel Logo" class = "logo">
                    </a>
                </th>

                <div class = "tabs">
                    <th>
                        <a href = "home_page.php" class = "button">HOME</a>
                    </th>

                    <th>
                        <a href = "R_booking.php" class = "button">BOOKING</a>
                    </th>

                    <th>
                        <a href = "Userprofile.php" class = "button">USER&nbspPROFILE</a>
                    </th>
                    
                    <th>
                        <a href = "aboutUs.html" class = "button">ABOUT&nbspUS</a>
                    </th>

                    <th>
                        <a href = "contactus.php" class = "button">CONTACT&nbspUS</a>
                    </th>

                    <!--<th>
                        <a href ="register.php" class ="button">SIGN&nbspUP</a>
                    </th>

                    <th>
                        <a href = "login.php" class ="button">LOGIN</a>
                    </th>-->
                    <th>
                        <a href="R_index.php" class ="button">ADMIN&nbspLOGIN</a>
                    </th>
                    <th>
                        <form action="logout.php" method="post">
                           <input type="submit" value="logout" name="logout" class ="button" style="font-size:16px;  font-family: Arial, Helvetica, sans-serif; font-weight:bold; background-color:red;">
                      </form>
                    </th>

                </div>
            </tr>
        </table>
        </header>
    </body>
</html>