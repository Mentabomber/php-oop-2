<?php
class Category {
    private $type;
    private $typeIcon;

    public function __construct($type, $typeIcon){

        $this -> setType($type);
        $this -> setTypeIcon($typeIcon);    


    }

    public function getType() {

        return  $this -> type;
    }
    public function setType($type) {

        $this -> type = $type;
    }

    public function getTypeIcon() {

        return  $this -> typeIcon;
    }
    public function setTypeIcon($typeIcon) {

        $this -> typeIcon = $typeIcon;
    }

}

class Product {

    private $title;
    private Category $category;
    private $type;
    private $img;
    private $prizing;
    
    
    public function __construct($title, $img, $type, $prizing, $category){

        $this -> setTitle($title);
        $this -> setImg($img);   
        $this -> setType($type);  
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
        public function getType() {
    
            return $this -> type;
        }
        public function setType($type) {
    
            $this -> type = $type;
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
?>






