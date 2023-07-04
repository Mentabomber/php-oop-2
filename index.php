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
    <div class="flex">
        <?php 

            foreach ($toys as $toy) {
                
                ?>

                    <div>

                        <h3>
                            <?php echo $toy -> getTitle(); ?>
                        </h3>
                        <div>Colore: <?php echo $toy -> getColor(); ?></div>
                        <div>Prezzo: <?php echo $toy -> getPrizing(); ?>$</div>
                        <div>Categoria: <?php echo $toy -> getCategory() -> getType(); ?></div>
                        <div class="img-container"><img src="
                            <?php                     
                                echo $toy -> getCategory() -> getTypeIcon();
                            ?>" 
                        alt=""></div>

                    </div>

                <?php
            }
        
        
        ?>
    </div>

</body>
</html>
<style>
    .container{
        display: flex;
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
    }
</style>