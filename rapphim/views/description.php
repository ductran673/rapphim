<?php
$code = $_GET['code'];
require_once("/control/ctrl_frm.php");
$connect = new ctrl_frm();
$records = $connect->getFilm($code);
?>

<style>
    .description {
        color: #fff;
    }
</style>

<div class="wrapper">
    <?php foreach ($records as $record): ?>
        <div class="description">
            <div class="movie-name">
                <?= $record['moviename'] ?>
            </div>
            <div class="img-firm">
                <img src="<?= $record['poster'] ?>" alt="">
            </div>
            <div class="movie-stars">
                <?= $record['moviestars'] ?>
            </div>
            <div class="directors">
                <?= $record['director'] ?>
            </div>

        </div>
    <?php endforeach; ?>

</div>