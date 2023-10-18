<?php for ($num =1; $num <= $totalPages ;$num++){ 
    if(!isset($_GET['type'])) {?>
<a class="page-item" href="index.php?act=khamphaphim&per_page=<?=$item_per_page?>&page=<?=$num?>"><?=$num?></a>
<?php } } ?>