<?php

class DogHouse extends Product{
    private $material;


    public function __construct($material){

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