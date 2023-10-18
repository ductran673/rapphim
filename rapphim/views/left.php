<?php
require_once ("./control/ctrl_frm.php");
$connect = new ctrl_frm();
$records = $connect->getCategory();
?>

<div id="left" style="color:white">
    <ul>
        <?php foreach ($records as $record): ?>
            <li><a href="index.php?type=<?= $record['ID'] ?>">
                    <?= $record['name'] ?>
                </a></li>
        <?php endforeach; ?>

    </ul>
</div>