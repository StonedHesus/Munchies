<?php

$firstname = $lastname = $mail = $password = "";

if($_SERVER["REQUEST_METHOD"] === "POST"){

    if($_COOKIE['password_equality'] === true){

        $temporary = new User($_POST['firstname'], $_POST['lastname'],
            $_POST['username'], $_POST['mail'], $_POST['password'] );

        header('Location: http://localhost:8888/index.html');
    } else{

        echo("<h1 style='text-align: center;'>Welcome to the Munchies' family!</h1>");
    }
}