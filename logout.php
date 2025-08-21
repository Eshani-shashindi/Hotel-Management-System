<?php
include 'config.php';
session_start();
if(isset($_POST["logout"])) {
   
    $_SESSION = array();//clear the previously added session varibles

    
    if (isset($_COOKIE[session_name()])) {
        setcookie(session_name(), '', time() - 3600, '/');
    }
    session_destroy();
    header('Location: login.php');
    exit();
}
?>

