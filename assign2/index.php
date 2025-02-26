<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="description" content="The Reel Room Index">
    <meta name="keywords" content="index">
    <meta name="author" content="">
    <title>The Reel Room</title>
    <link rel="stylesheet" href="styles/style.css">
</head>

<body>

    <?php 
        include "includes/header.inc";
    ?>

    <div class="container-1">
        <?php
            $movie1 = 'In the Mood for Love';
            $movie2 = 'Midsommar';
            $movie3 = 'Once Upon a Time';
            $movie4 = 'Dune';   
            $movie5 = 'Coraline';
            $movie6 = 'The Dark Knight';
        ?>

        <div class="bg-img"></div>

        <div class="movie">
            <h2>Current:</h2>
            <br>
            <br>
            <h4><?php echo $movie1; ?></h4>
            <h4><?php echo $movie2; ?>/</h4>
            <br>
            <h4><?php echo $movie3; ?>/</h4>
            <br>
            <h4><?php echo $movie4; ?></h4>
            <h4><?php echo $movie5; ?>/</h4>
            <br>
            <h4><?php echo $movie6; ?>/</h4>
        </div>
    </div>


    <div class="container-2">
        <div class="shop">
            <h3 class="shop-title">Shop Now</h3>
        </div>  
        <ul class="vinyl-record">
            <li class="product">
                <div class="product-1">
                    <?php
                        $movieTitle = "In The Mood For Love";
                        $movieImage = "image/inthemoodforlove.jpg";
                    ?>
                    <h4><?php echo $movieTitle; ?></h4>
                    <br>
                    <br>
                    <br>
                    <img class="product-img" src="<?php echo $movieImage; ?>" alt="<?php echo $movieTitle; ?>">
                </div>
            </li>
            <li class="product">
                <div class="product-2">
                    <?php
                        $movieTitle = "Once Upon a Time... in Hollywood";
                        $movieImage = "image/onceupon.jpg";
                    ?>
                    <h4><?php echo $movieTitle; ?></h4>
                    <br>
                    <br>
                    <br>
                    <img class="product-img" src="<?php echo $movieImage; ?>" alt="<?php echo $movieTitle; ?>">
                </div>
            </li>
            <li class="product">
                <div class="product-3">
                    <?php
                        $movieTitle = "Dune";
                        $movieImage = "image/dune.jpg";
                    ?>
                    <h4><?php echo $movieTitle; ?></h4>
                    <br>
                    <br>
                    <br>
                    <br>
                    <img class="product-img" src="<?php echo $movieImage; ?>" alt="<?php echo $movieTitle; ?>">
                </div>
            </li>
            <li class="product">
                <div class="product-4">
                    <?php
                        $movieTitle = "Coraline";
                        $movieImage = "image/coraline.jpg";
                    ?>
                    <h4><?php echo $movieTitle; ?></h4>
                    <br>
                    <br>
                    <br>
                    <br>
                    <img class="product-img" src="<?php echo $movieImage; ?>" alt="<?php echo $movieTitle; ?>">
                </div>
            </li>
        </ul>
    </div>

    <?php 
        include "includes/footer.inc";
    ?>


    


</body>
</html>
