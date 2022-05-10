<?php

$username = $password = "";

if($_SERVER["REQUEST_METHOD"] == "POST"){

    try{

        $data_base = new PDO("mysql:host=localhost;dbname=munchies", "root", "");
        $data_base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch(PDOException $error){

    }


    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = $data_base->prepare ("SELECT id, username, password FROM users WHERE username = :username");
    $sql->bindParam(':username', $username);

    $result = $data_base->query($sql);

    if ($result->rowCount() == 1) {

        header('Location: http://localhost:8888/index.html');
    } else{

        header('Location: http://localhost:8888/pages/login.html');
    }


}

//exit();