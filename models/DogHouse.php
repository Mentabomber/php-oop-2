<?php

class DogHouse extends Product{
    private $material;

 
    public function __construct($title, $img, $type, $prizing, Category $category, $edible, $material){

        parent :: __construct($title, $img, $type, $prizing, $category, $edible); 
        $this -> setMaterial($material);

    }
    public function getMaterial() {

        return $this -> material;
    }
    public function setMaterial($material) {

        $this -> material = $material;
    }
}
?>