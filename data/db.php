<?php

require_once("./models/Product.php");
require_once("./models/Toy.php");
require_once("./models/Food.php");
require_once("./models/DogHouse.php");


// Categorie prodotti

$catCategory = new Category("Cats", "./img/cat-solid.svg");

$dogCategory = new Category("Dogs", "./img/dog-solid.svg");

// Prodotti

try {

    $products = [
        $toy1 = new Toy("osso", "img-osso", "toy", -1, $dogCategory, true, "red"),
        $toy2 = new Toy("pallina", "img-pallina", "toy", 10, $catCategory, false, "yellow"),
        $toy3 = new Toy("nastro", "img-nastro", "toy", 7, $dogCategory, false, "red"),
        $toy4 = new Toy("bottiglia", "img-osso", "toy", 9, $catCategory, false, "brown"),
        $toy5 = new Toy("palla-tennis", "img-palla-tennis", "toy", 13, $dogCategory, false, "yellow"),
        $toy6 = new Toy("osso", "img-osso", "toy", 22, $dogCategory, true, "grey"),
        $food1 = new Food("carne", "img-carne", "food", 5, $dogCategory, true, "meat"),
        $food2 = new Food("verdure", "img-verdure", "food", 6, $dogCategory, true, "vegetable"),
        $food3 = new Food("frutta", "img-frutta", "food", 15, $catCategory, true, "fruit"),
        $dogHouse1 = new DogHouse("cuccia-cuscino", "img-cuccia-cuscino", "dogHouse", 30, $dogCategory, false, "lana"),
        $dogHouse2 = new DogHouse("cuccia-esterno", "img-cuccia-esterno", "dogHouse", 50, $dogCategory, false, "legno"),
        $dogHouse3 = new DogHouse("cuccia-interno", "img-cuccia-interno", "dogHouse", 40, $dogCategory, false, "stoffa"),
    
    ];
} catch (Exception $e) {

    echo "Error: " . $e -> getMessage();
}


// $toys = [
//     $toy1 = new Toy("osso", "img-osso", 5, $dogCategory, "red"),
//     $toy2 = new Toy("pallina", "img-pallina", 5, $catCategory, "yellow"),
//     $toy3 = new Toy("nastro", "img-nastro", 5, $dogCategory, "red"),
//     $toy4 = new Toy("bottiglia", "img-osso", 5, $catCategory, "brown"),
//     $toy5 = new Toy("palla-tennis", "img-palla-tennis", 5, $dogCategory, "yellow"),
//     $toy6 = new Toy("osso", "img-osso", 5, $dogCategory, "red"),

// ];

// $foods = [

//     $food1 = new Food("carne", "img-carne", 5, $dogCategory, "food", "meat"),
//     $food2 = new Food("verdure", "img-verdure", 5, $dogCategory, "food", "vegetable"),
//     $food3 = new Food("frutta", "img-frutta", 5, $catCategory, "food", "fruit"),
 
// ];


// Prodotti per gatti

// $product2 = new Product("Lettiera", "img-lettiera", 15, $catCategory);

// $products = [
//     new Product("Osso", "img-osso", 5, $dogCategory, "food"),
//     new Product("pap", "img-lettiera", 15, $catCategory, "dogHouse"),
//     new Product("ciano", "img-lettiera", 15, $catCategory, "food"),
//     new Product("ciotola", "img-lettiera", 15, $catCategory, "food"),
//     new Product("fischio", "img-lettiera", 15, $catCategory, "toy", "yellow"),
//     new Product("manichino", "img-lettiera", 15, $catCategory, "dogHouse"),
//     new Product("bomba", "img-lettiera", 15, $catCategory, "food"),
// ];
?>