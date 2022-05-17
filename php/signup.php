<?php

include './components/User.php';

session_start();

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

    $insert_sql = $data_base->prepare("INSERT INTO users (firstName, lastName, username, email, password, role) VALUES (:firstName, :lastName, :username, :email, :password, :role)");

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
    $role = "user";
    $insert_sql->bindParam(':role', $role);


    $insert_sql->execute();

//        $insert_sql = "INSERT INTO users (firstName, lastName, username, email, password) VALUES (" . $temporary->getFirstName() . "," . $temporary->getLastName(). "," . $temporary->getUsername() ."," . $temporary->getEmail() . "," . $temporary->getPassword() . ")";
//
//        $data_base->exec($insert_sql);
//
    $sql = "SELECT username, password FROM users";

    $result = $data_base->query($sql);

    $_SESSION['loggedin'] = true;
    $_SESSION['username'] = $username;
    $_SESSION['firstName'] = $firstName;
    $_SESSION['lastName'] = $lastName;

    header('location: http://localhost/Munchies/index.php');

} else{

    header('location: http://localhost/Munchies/pages/error-page/error.html');
}
//}

