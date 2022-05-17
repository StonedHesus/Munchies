<?php
session_start();

// Check if the user is already logged in, if that is the case then redirect him to the main page.
if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
    header("location: http://localhost/pages/reset-password.php");
    exit;
}
