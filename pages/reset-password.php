<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content ="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <title>Password reset - Munchies</title>


    <link href="./../style/login.css" type="text/css" rel="stylesheet">
</head>
<?
    session_start();

    if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){

        header("location:  http://localhost/munchies");
        exit;
    }

    $new_password = $confirm_password = "";
    $new_password_err = $confirm_password_err = "";

if($_SERVER["REQUEST_METHOD"] == "POST"){

    try{

        $data_base = new PDO("mysql:host=localhost;dbname=munchies", "root", "");
        $data_base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch(PDOException $error){
    }

    // Validate new password
    if(empty(trim($_POST["new_password"]))){
        $new_password_err = "Please enter the new password.";
    } elseif(strlen(trim($_POST["new_password"])) < 6){
        $new_password_err = "Password must have atleast 6 characters.";
    } else{
        $new_password = trim($_POST["new_password"]);
    }

    // Validate confirm password
    if(empty(trim($_POST["confirm_password"]))){
        $confirm_password_err = "Please confirm the password.";
    } else{
        $confirm_password = trim($_POST["confirm_password"]);
        if(empty($new_password_err) && ($new_password != $confirm_password)){
            $confirm_password_err = "Password did not match.";
        }
    }

    // Check input errors before updating the database
    if(empty($new_password_err) && empty($confirm_password_err)){
        // Prepare an update statement
        $sql = "UPDATE users SET password = :password WHERE id = :id";

        if($statement = $data_base->prepare($sql)){
            // Bind variables to the prepared statement as parameters
            $statement->bindParam(":password", $param_password, PDO::PARAM_STR);
            $statement->bindParam(":id", $param_id, PDO::PARAM_INT);

            // Set parameters
            $param_password = password_hash($new_password, PASSWORD_DEFAULT);
            $param_id = $_SESSION["id"];

            // Attempt to execute the prepared statement
            if($statement->execute()){
                // Password updated successfully. Destroy the session, and redirect to login page
                session_destroy();
                header("location: login.php");
                exit();
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }

            // Close statement
            unset($statement);
        }
    }

    // Close connection
    unset($data_base);
}

?>
<body>
<section>
    <div class="authentication">
        <h1>Type in new password</h1>
        <form action="./../php/login.php" method="post">
            <input type="password" name="password" id="password"
                   placeholder="Password" autocomplete="off" required="required">
            <input type="password" name="retyped-password" id="retyped-password" placeholder="Retype the entered password" required="required">
            <button type="submit">Save</button>
        </form>
        <p>Not a member? Then what are you waiting for, <a href="./signup.html"><span>sign up</span></a>
            now and enjoy the wonders of Munchies!</p>
    </div>
</section>

<footer>

</footer>
</body>
</html>