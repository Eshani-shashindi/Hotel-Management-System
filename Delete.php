<!--IT23163454
A.M.H.Navodya-->
<?php
  require 'config.php';

  session_start();

  $Email = $_SESSION["Email"];

   $sql1="DELETE FROM contact_us WHERE Email='$Email'";
   $con->query($sql1)
          
             ?>
               <script>
                 window.location.href = "contactus.php";
                </script>
<?php
        
     $conn->close();
     ?>