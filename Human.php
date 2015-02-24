<?php

class Human {
    
    /**
     *
     * @var string
     */
    protected $firstName;
    /**
     *
     * @var string
     */
    protected $lastName;

    /**
     * 
     * @param type $firstName
     * @param type $lastName
     */
    public function __construct($firstName, $lastName) {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
    }

    /**
     * 
     * @return string
     */
    function getFirstName() {
        return $this->firstName;
    }

    /**
     * 
     * @return string
     */
    function getLastName() {
        return $this->lastName;
    }

    /**
     * 
     * @param string $firstName
     */
    function setFirstName($firstName) {
        $this->firstName = $firstName;
    }

    /**
     * 
     * @param string $lastName
     */
    function setLastName($lastName) {
        $this->lastName = $lastName;
    }

}
