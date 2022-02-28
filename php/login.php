<?php

$username = $password = "";

if($_SERVER["REQUEST_METHOD"] === "POST"){

    $username = $_POST['username'];
    $password = $_POST['password'];

    header('Location: http://localhost:8888/index.html');
}

exit();