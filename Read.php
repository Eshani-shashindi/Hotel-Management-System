<!--IT23163454
A.M.H.Navodya-->
<?php
require 'config.php';

session_start();

  $Email = 'hansi@gmail.com';

  $_SESSION["Email"] = $Email;
  
  $Email = $_SESSION["Email"];


 //read data base and display

 $sql = "SELECT * FROM contact_us WHERE Email='$Email'";

  $result= $con->query($sql);

  if($result->num_rows>0)
    {
      while($row=$result->fetch_assoc())
     {
                           
    ?>

        <label id="name">Name : </label>
        <input type="text" style="margin: 30px; height: 40px;" id="name" placeholder="Enter your name" value="<?php echo $row["nname"]; ?>" name="name" required>
              <br>
              <br>
        
        <label id="email">Email : </label>
        <input type="text" style="margin: 30px; height: 40px;" id="email" placeholder="Enter your phone number" value="<?php echo $row["Email"]; ?>" name="Email" required>
              <br>
              <br>

              <label id="Phone">Phone number : </label>
        <input type="text" style="margin: 30px; height: 40px;" id="Phone" placeholder="Enter your phone number" value="<?php echo $row["Phone"]; ?>" name="Phone" required>
              <br>
              <br>
        <lable id="Message">Message : </lable>
        <input type="text" style="margin: 30px; height: 40px;" id="Message" placeholder="Enter your message" value="<?php echo $row ["Message"]; ?>" name="Message" required>                                                
        <br>                                                                                                                                 
              
        <?php
            }
        }
        $con->close();
 ?>