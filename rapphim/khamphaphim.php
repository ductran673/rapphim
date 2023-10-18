<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>Khám phá</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href ="./assets/stylekhampha.css">
        
    </head>
    <body>

        <?php
        include 'connect_db.php';
        $item_per_page = !empty($_GET['per_page'])? $_GET['per_page']:5;
        $current_page =!empty($_GET['page'])? $_GET['page']:1;
        $offset = ($item_per_page ) * ($current_page-1);
        $films = mysqli_query ($con,"SELECT * FROM `movies` ORDER BY `id` ASC LIMIT ".$item_per_page." OFFSET ".$offset);
        $totalRecord = mysqli_query ($con,"SELECT * FROM `movies`");
        $totalRecord = $totalRecord ->num_rows;
        $totalPages = ceil($totalRecord/ $item_per_page);
        ?>
        <h1 style="padding-bottom:10px; color:pink;">Danh sách phim </h1>
        <p><?php include 'category.php';
               
                if(!isset($_GET['type'])) {
                    $films;
                }
                else {
                    $type = $_GET['type'];
                    $films = $connect->getFilmByCategory($type);
                }
        ?></p>
        <div class="container" style="padding:10px 0px 10px">
            
            <div class="product-items">
            <?php
                while ($film = mysqli_fetch_array($films)) {
                ?>
                
                <?php foreach($films as $film): ?>
                    <div class="product-item">
                        <div class="product-img">
                            <a href="/rapphim/views/detail.php?id=<?= $film ['id']?>"><img src="/rapphim/img/<?=$film['poster'];?>" title="" /></a>
                        </div>
                        <strong><a href="/rapphim/views/detail.php?id=<?= $film ['id']?>"><?=$film['moviename']?></a></strong><br/>
                        <label>Năm: </label><span class="product-price"><?=$film['moviedates'];?> </span><br/>
                        <p></p>
                        <div class="buy-button">
                            <a href="/rapphim/booking/booking.php">Mua vé</a>
                        </div>
                    </div>
             
                    <div class="clear-both"></div>
                
                    <div class="clear-both"></div>
                <?php endforeach; ?>
                
                <?php } ?>
            </div>
            
        </div>
        <p><?php include 'pagination.php'; ?> </p>
    </div>
    </body>
</html>