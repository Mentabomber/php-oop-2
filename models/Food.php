<?php

class Food extends Product{
    private $typeOfFood;


    public function __construct($title, $img, $type, $prizing, Category $category, $edible,$typeOfFood){
        
        parent :: __construct($title, $img, $type, $prizing, $category, $edible); 
        $this -> setTypeOfFood($typeOfFood);

    }
    public function getTypeOfFood() {

        return $this -> typeOfFood;
    }
    public function setTypeOfFood($typeOfFood) {

        $this -> typeOfFood = $typeOfFood;
    }
}
?>