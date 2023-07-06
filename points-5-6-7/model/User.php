<?php
class User {
    private $id;
    private $name;
    private $lastName;
    private $idNumber;

    public function __construct($idP, $nameP, $lastNameP, $idNumberP){
        $this->id = $idP;
        $this->name = $nameP;
        $this->lastName = $lastNameP;
        $this->idNumber = $idNumberP;
    }

    public function getId(){
        return $this->id;
    }
    public function getName(){
        return $this->name;
    }
    public function getLastName(){
        return $this->lastName;
    }
    public function getIdNumber(){
        return $this->idNumber;
    }
}
?>