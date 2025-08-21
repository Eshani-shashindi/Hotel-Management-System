<!--IT23157446 B.A.L.M.U. Bogoda Arachchi-->
<?php
    require 'config.php';

    if(isset($_POST['submit'])) 
    {
       
       
        $Cid=$_POST["CID"];
        $UserId = $_POST["txt1"];
        $CType = $_POST["CuisineType"];
        $CDate = $_POST["cuisineDate"] ;
       

        $sqlCode="UPDATE cuisinebooking SET cuisineBookingId='$Cid',userId='$UserId', CuisineType='$CType', CDate='$CDate' WHERE cuisineBookingId='$Cid'";
    
        $check=mysqli_query($con,$sqlCode);
            if($check)
            {
                echo "<script>alert('updated successfully')</script>";
                header("Location:L_userButton.php"); 
            }
    }
else
{
    echo "<script>alert('not updated')</script>";
}
mysqli_close($con);
?>