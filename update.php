<!--IT23163454
A.M.H.Navodya-->
<?php
 include 'config.php';
 session_start();

  $Email = $_SESSION["Email"];

 //update data base
 $name=$_POST["name"];
 $phone=$_POST["Phone"];
 $email=$_POST["Email"];
 $message=$_POST["Message"];


 $sql2 = "UPDATE contact_us SET nname='$name', Email='$email', Phone='$phone', Message='$message' WHERE Email='$Email'";


 if($con->query($sql2))
   {
      ?>
      <script>
      window.location.href = "ticket.php";
      </script>
      <?php

      }
 else{
     echo "error";
  }

 $con->close();
 
?>