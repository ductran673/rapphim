<?php 
    require_once("control/ctrl_frm.php");
    $connect = new ctrl_frm();
    $records = $connect->getCategory();
?>
<a class="page-item" href="index.php?act=khamphaphim"> Tất Cả </a>
<?php foreach($records as $record): ?>
    <a class="page-item" href="index.php?act=khamphaphim&type=<?= $record['id'] ?>"><?= $record['name'] ?></a>
<?php endforeach; ?>


