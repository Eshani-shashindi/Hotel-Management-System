<!--IT23163454
A.M.H.Navodya-->
<?php
require 'config.php';


    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $message = $_POST['message'];

    $sql="INSERT INTO contact_us VALUES ('$name','$email','$phone',' $message','')";

    if($con->query($sql))
    {
        echo "succesfull";
    }
    else {
        echo "error";
    }

    $to = 'info@hotelelegance.com';
    $subject = 'New Contact Form Submission';
    $body = "Name: $name\nEmail: $email\nPhone: $phone\nMessage: $message";
    mail($to, $subject, $body);

    
    header('Location: ticket.php');
    exit;

?>