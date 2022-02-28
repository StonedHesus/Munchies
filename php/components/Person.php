<?php


class Person
{
    /**
     *
     * Person constructor.
     * @param $firstName
     * @param $lastName
     *
     * @author Andrei-Paul Ionescu
     * @versio 0.01
     */

    // Attributes of the class.
    private $firstName;
    private $lastName;

    // Constructors of the class.
    public function __construct($firstName, $lastName){

        $this->firstName = $firstName;
        $this->lastName  = $lastName;
    }

    // Getter methods of the class.
    public function getFirstName() {return $this->firstName;}
    public function getLastName() {return $this->lastName;}

}