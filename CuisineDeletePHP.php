<!--IT23157446 B.A.L.M.U. Bogoda Arachchi-->
<?php
include_once 'Config.php';

        $Cid=$_POST["CID"];
       

        $sqlCode="DELETE FROM cuisinebooking  WHERE cuisineBookingId='$Cid'";
       
        $check=mysqli_query($con,$sqlCode);
            if($check)
            {
                echo "<script>alert('deleted successfully')</script>";
                header("Location:dinning.php"); 
                
               
            }

            
            else{
                echo "<script>alert('Records not deleted')</script>";
            }
            header("Location:L_userButton.php"); 
    
mysqli_close($con);
?>

