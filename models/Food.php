<?php

class Food extends Product{
    private $typeOfMeat;


    public function __construct($typeOfMeat){

        $this -> setTypeOfMeat($typeOfMeat);

    }
    public function getTypeOfMeat() {

        return $this -> typeOfMeat;
    }
    public function setTypeOfMeat($typeOfMeat) {

        $this -> typeOfMeat = $typeOfMeat;
    }
}
?>