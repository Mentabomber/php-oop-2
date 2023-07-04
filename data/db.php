<?php

require_once("./models/Product.php");
require_once("./models/Toy.php");
require_once("./models/Food.php");
require_once("./models/DogHouse.php");


// Categorie prodotti

$catCategory = new Category("Cats", "./img/cat-solid.svg");

$dogCategory = new Category("Dogs", "./img/dog-solid.svg");


// Tipi di Prodotti

// Prodotti per cani


$product1 = new Product("prod1", "img-prod1", 5, $dogCategory);



$toys = [
    $toy1 = new Toy("osso", "img-osso", 5, $dogCategory, "toy", "red"),
    $toy2 = new Toy("pallina", "img-pallina", 5, $catCategory, "toy", "yellow"),
    $toy3 = new Toy("nastro", "img-nastro", 5, $dogCategory, "toy", "red"),
    $toy4 = new Toy("bottiglia", "img-osso", 5, $catCategory, "toy", "brown"),
    $toy5 = new Toy("palla-tennis", "img-palla-tennis", 5, $dogCategory, "toy", "yellow"),
    $toy6 = new Toy("osso", "img-osso", 5, $dogCategory, "toy", "red"),

];

$foods = [

    $food1 = new Toy("osso", "img-osso", 5, $dogCategory, "toy", "red"),
    $food2 = new Toy("osso", "img-osso", 5, $dogCategory, "toy", "red"),
    $food3 = new Toy("osso", "img-osso", 5, $dogCategory, "toy", "red"),
    $food4= new Toy("osso", "img-osso", 5, $dogCategory, "toy", "red"),
    $food5 = new Toy("osso", "img-osso", 5, $dogCategory, "toy", "red"),
];


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