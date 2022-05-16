<?php

session_start();

// Check if the user is already logged in, if that is the case then redirect him to the main page.
if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
    header("location:  http://localhost:8888/index.html'");
    exit;
}


$username = $password = "";
$username_error = $password_error = $login_error = "";

if($_SERVER["REQUEST_METHOD"] == "POST"){

    try{

        $data_base = new PDO("mysql:host=localhost;dbname=munchies", "root", "");
        $data_base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch(PDOException $error){
    }

    // Check if the username is empty or not, and take the appropriate actions for each case.
    if(empty(trim($_POST['username']))){

        $username_error = "Please type-in an username";
    } else {

        $username = trim($_POST['username']);
    }

    // Check whether or not the password is empty, and take the appropriate actions for each case.
    if(empty(trim($_POST['password']))){

        $password_error = "Please enter your password.";
    } else {

        $password = trim($_POST['password']);
    }

    if(empty($username_error) && empty($password_error)){

        $sql = ("SELECT id, username, password FROM users WHERE username = :username");

        if($statement = $data_base->prepare($sql)){

            $statement->bindParam(':username', $username, PDO::PARAM_STR);

            if($statement->execute()){

                // Determine whether the username exists or not, if it does then check to see if the password
                // matches or not.
                if($statement->rowCount() == 1){

                    if($row = $statement->fetch()){

                        $id = $row["id"];
                        $username = $row["username"];
                        $hashed_password = $row["password"];

                        if(password_verify($password, $hashed_password)){
                            // Password is correct, so initialise a new session and redirect the user.
                            $_SESSION["loggedin"] = true;
                            $_SESSION["id"] = $id;
                            $_SESSION["username"] = $username;
                            header("location:  http://localhost:8888/index.html'");
                        } else {

                            $login_error = "Invalid name or username";
                        }
                    } else {

                        $login_err = "Username does not exist.";
                    }
                } else{

                    echo "Something really really wrong has just occurred. Please try again in a jiffy.";
                }

                unset($statement);
            }
        }

        unset($data_base);

    }
}

//exit();