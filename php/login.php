<?php

$username = $password = "";

if($_SERVER["REQUEST_METHOD"] == "POST"){

    echo "<h1>My first query.</h1>";
    try{

        $data_base = new PDO("mysql:host=localhost;dbname=Munchies", "root", "");
        echo "<p>Connected successfully</p>";
        $data_base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch(PDOException $error){

        die("<p>Connection failed </p>" . $error->getMessage());
    }


    $sql = "SELECT * FROM users";

    $result = $data_base->query($sql);

    if ($result->rowCount() > 0) {
        // output data of each row
        while($row = $result->fetch()) {
            echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
        }
    } else {
        echo "0 results";
    }

    $username = $_POST['username'];
    $password = $_POST['password'];


   header('Location: http://localhost:8888/index.html');
}

//exit();