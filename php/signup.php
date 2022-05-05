<?php

include './components/User.php';

$firstname = $lastname = $mail = $password = "";

if($_SERVER["REQUEST_METHOD"] == "POST"){

    //if($_COOKIE['password_equality'] == 'true'){

    $temporary = new User($_POST['firstname'], $_POST['lastname'],
        $_POST['username'], $_POST['mail'], $_POST['password'] );

    try {

        $data_base = new PDO("mysql:host=localhost;dbname=munchies", "root", "");;
    } catch(PDOException $exception) {

        echo "Connection failed: " . $exception->getMessage();
    }

    $insert_sql = $data_base->prepare("INSERT INTO users (firstName, lastName, username, email, password) VALUES (:firstName, :lastName, :username, :email, :password)");

    $firstName = $temporary->getFirstName();
    $insert_sql->bindParam(':firstName', $firstName);
    $lastName = $temporary->getLastName();
    $insert_sql->bindParam(':lastName', $lastName);
    $username = $temporary->getUsername();
    $insert_sql->bindParam(':username', $username);
    $email = $temporary->getEmail();
    $insert_sql->bindParam(':email', $email);
    $password1 = $temporary->getPassword();
    $insert_sql->bindParam(':password', $password1);

    $insert_sql->execute();

//        $insert_sql = "INSERT INTO users (firstName, lastName, username, email, password) VALUES (" . $temporary->getFirstName() . "," . $temporary->getLastName(). "," . $temporary->getUsername() ."," . $temporary->getEmail() . "," . $temporary->getPassword() . ")";
//
//        $data_base->exec($insert_sql);
//
    $sql = "SELECT username, password FROM users";

    $result = $data_base->query($sql);

    if ($result->rowCount() > 0) {
        // output data of each row
        while($row = $result->fetch()) {
            echo "Username: " . $row['username'] . " | Password: " . $row['password'] ."\n";
        }
    }

        //header('Location: http://localhost:8888/index.html');
} else{

    echo("<h1 style='text-align: center;'>Welcome to the Munchies' family!</h1>");
}
//}

