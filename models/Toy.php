<?php

class Toy extends Product{
    private $color;

    public function __construct($title, $img, $type, $prizing, Category $category, $edible, $color){

        parent :: __construct($title, $img, $type, $prizing, $category, $edible); 
        $this -> setColor($color);

    }
    public function getColor() {

        return $this -> color;
    }
    public function setColor($color) {

        $this -> color = $color;
    }
}
?>
