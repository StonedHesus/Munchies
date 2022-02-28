<?php


class User extends Person
{
    /**
     *
     * User constructor.
     * @param $firstName
     * @param $lastName
     * @param $username
     * @param $email
     * @param $password
     *
     * public setPassword.
     * @param $password
     * @param $retypedPassword
     *
     * private function checkPasswordEquality.
     * @param $password
     * @param $retypedPassword
     *
     * @author Andrei-Paul Ionescu
     * @versio 0.01
     */

    // Attributes of the class.
    private $username;
    private $email;
    private $password;

    // Constructors of the class.
    public function __construct($firstName, $lastName, $username, $email, $password){

        parent::__construct($firstName, $lastName);

        $this->username = $username;
        $this->email = $email;
        $this->password = $password;
    }

    // Getter methods of the class.
    public function getUsername() {return $this->username;}
    public function getEmail() {return $this->email;}

    // Setter methods of the class.
    public function setPassword($password, $retypedPassword) {
        if($this->checkPasswordEquality($password, $retypedPassword)){

            $this->password = $password;
        }
    }

    // Methods of the class.
    private function checkPasswordEquality($password, $retypedPassword){

        if($password === $retypedPassword){

            return true;
        }

        return false;
    }

}