<?php
class Category {
    private $type;
    private $typeIcon;
}

class Product {

    private $title;
    private $category;
    private $img;
    private $prizing;
    
    public function __construct($title, $img, $prizing, Category $category){

        $this -> setTitle($title);
        $this -> setImg($img);    
        $this -> setPrizing($prizing);
        $this -> setCategory($category);

    }

        public function getTitle() {

            return  $this -> title;
        }
        public function setTitle($title) {
    
            $this -> title = $title;
        }
    
        public function getImg() {
    
            return $this -> img;
        }
        public function setImg($img) {
    
            $this -> img = $img;
        }
    
        public function getPrizing() {
    
            return $this -> prizing;
        }
        public function setPrizing($prizing) {
    
            $this -> prizing = $prizing;
        }
    
        public function getCategory() {
    
            return $this -> category;
        }
        public function setCategory($category) {
    
            $this -> category = $category;
        }
}


class Toy {

}

class Food {

}

class DogHouse {

}

