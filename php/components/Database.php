<?php
class Database extends PDO{


    // Attributes of the class.

    // Constructors of the class.
    public function __construct($dsn = "mysql:host=localhost;dbname=munchies"
        , $username = "root", $password = "", $options = null)
    {
        parent::__construct($dsn, $username, $password, $options);
    }

    // Methods of the class.
    public function deleteUser($username){

        $query = $this->prepare("DELETE FROM Users WHERE username= ?");
        $query->execute([$username]);
    }
    public function queryDatabase($query){

        $result = $this->prepare($query);
        $result->execute();

        return $result;
    }

}