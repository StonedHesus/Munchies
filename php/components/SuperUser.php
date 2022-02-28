<?php


class SuperUser extends User
{
    /**
     *
     * SuperUser constructor.
     * @param $firstName
     * @param $lastName
     * @param $username
     * @param $email
     * @param $password
     *
     * @author Andrei-Paul Ionescu
     * @version 0.01
     */
    // Constructors of the class.
    public function __construct($firstName, $lastName, $username, $email, $password){

        parent::__construct($firstName, $lastName, $username, $email, $password);
    }

}