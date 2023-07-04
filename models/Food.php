<?php

class Food extends Product{
    private $typeOfFood;


    public function __construct($title, $img, $type, $prizing, Category $category, $typeOfFood){
        
        parent :: __construct($title, $img, $type, $prizing, $category); 
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