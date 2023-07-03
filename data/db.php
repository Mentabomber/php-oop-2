<?php

require_once("./models/Product.php");


// Categorie prodotti

$catCategory = new Category("Cats", "./img/cat-solid.svg");

$dogCategory = new Category("Dogs", "./img/dog-solid.svg");


// Tipi di Prodotti

// Prodotti per cani


$product1 = new Product("Osso", "img-osso", 5, $dogCategory);


// Prodotti per gatti

$product2 = new Product("Lettiera", "img-lettiera", 15, $catCategory);

$products = [
    new Product("Osso", "img-osso", 5, $dogCategory),
    new Product("Lettiera", "img-lettiera", 15, $catCategory),
    new Product("Lettiera", "img-lettiera", 15, $catCategory),
    new Product("Lettiera", "img-lettiera", 15, $catCategory),
    new Product("Lettiera", "img-lettiera", 15, $catCategory),
    new Product("Lettiera", "img-lettiera", 15, $catCategory),
    new Product("Lettiera", "img-lettiera", 15, $catCategory),


];