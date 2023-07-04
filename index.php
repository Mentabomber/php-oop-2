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
        <div class="flex">
            <?php 

                foreach ($products as $product) {
                    
                    ?>

                        <div class="card">

                            <h3>
                                <?php echo $product -> getTitle(); ?>
                            </h3>
                            <div>
                                <?php 
                                    if ($product -> getType() == "food") {
                                        echo "Tipo di Alimento: " . $product -> getTypeOfFood(); 
                                    }
                                    elseif ($product -> getType() == "toy") {
                                        echo "Colore: " . $product -> getColor(); 
                                    }
                                    elseif ($product -> getType() == "dogHouse") {
                                        echo "Materiale: " . $product -> getMaterial(); 
                                    }
                                ?>
                                
                            </div>
                            <div>Prezzo: <?php echo $product -> getPrizing(); ?>$</div>
                            <div>Categoria: </div>
                            <div class="img-container"><img src="
                                <?php                     
                                    echo $product -> getCategory() -> getTypeIcon();
                                ?>" 
                                alt="">
                            </div>
                            <div>Commestibile: <?php 
                                                    if ($product -> getEdible()) {
                                                        echo "<span> Sì </span>";
                                                    }
                                                    else {
                                                        echo "<span> No </span>";
                                                    }
                                                ?>
                            </div>

                        </div>

                    <?php
                }
            
            
            ?>
        </div>
    </div>
   

</body>
</html>
<style>
    .container{
        width: 1240px;
        margin: auto;
    }
    .img-container{
        width: 50px;
        height: 50px;
    }
    .img-container img{
        width: 100%;
        height: 100%;
    }
    .flex{
        display: flex;
        justify-content: center;
        width: 100%;
        flex-wrap: wrap;
    }
    .card{
        margin: 20px;
        padding: 10px 20px;
        border: 1px solid black;
        width: calc(100% / 4);
        background-color: yellow;
    }
</style>