<?php

class Toy extends Product{
    private $color;
    private $pType;

    public function __construct($title, $img, $prizing, Category $category, $pType, $color){

        parent :: __construct($title, $img, $prizing, $category); 
        $this -> setColor($color);
        $this -> setPType($pType);

    }
    public function getColor() {

        return $this -> color;
    }
    public function setColor($color) {

        $this -> color = $color;
    }
    public function getPType() {

        return $this -> pType;
    }
    public function setPType($pType) {

        $this -> pType = $pType;
    }
}
?>
