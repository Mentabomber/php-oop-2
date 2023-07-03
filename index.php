<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php
    require_once("./data/db.php");  
    ?>
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div>
            <div>
                <span>Titolo prodotto: </span> 
                <span>
                    <?php
                        echo $product1 -> getTitle();
                    ?>
                </span>
            </div>
            <span>Img: </span> 
            <span>
                <?php
                    echo $product1 -> getImg();
                ?>
            </span>
            <br>
            <span>Prezzo: </span> 
            <span>
                <?php
                    echo $product1 -> getPrizing();
                ?>$
            </span>
            <br>
            <span>Categoria: </span> 
            <span>
                <?php
                    echo $product1 -> getCategory() -> getType() . " ";
                    
                    
                    echo $product1 -> getCategory() -> getTypeIcon();
                ?>
            </span>
            <br>
        </div>
    </div>
    
    <div class="container">

        <div>
            <div>
                <span>Titolo prodotto: </span> 
                <span>
                    <?php
                        echo $product2 -> getTitle();
                    ?>
                </span>
            </div>
            <span>Img: </span> 
            <span>
                <?php
                    echo $product2 -> getImg();
                ?>
            </span>
            <br>
            <span>Prezzo: </span> 
            <span>
                <?php
                    echo $product2 -> getPrizing();
                ?>$
            </span>
            <br>
            <span>Categoria: </span> 
            <span>
                <?php
                    echo $product2 -> getCategory() -> getType() . " ";
                    echo $product2 -> getCategory() -> getTypeIcon();
                ?>
            </span>
            <br>
        </div>
    </div>
    
</body>
</html>
<style>
    .container{
        display: flex;
    }
</style>