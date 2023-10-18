<style>
  .product-prop{
    float: right;
    border-left: 1px solid #ccc;
    line-height: 90px;
    padding: 0 10px;
}
.product-img{
    width: 110px;
    height: 90px;
    float: left;
}
.product-img img{
    width: 100px;
    padding: 5px;
    height: 80px;
}
</style>
<p>Liệt kê danh mục phim</p>
<?php
$sql_lietke_phim = "SELECT *FROM movies ORDER BY id DESC" ;
$query_lietke_phim= mysqli_query($mysqli,$sql_lietke_phim);
 ?>
<table style="width:100%" border="1" style="border-collapse: collapse";>
  <tr>
    <th style="width:5%;" >STT</th>
    <th style="width:5%;">movieID</th>
    <th style="width:10%;">Tên Phim</th>
    <th style="width:5%;" >Thể Loại</th>
    <th style="width:10%;">Diễn viên</th>
    <th style="width:10%;">Đạo diễn</th>
    <th style="width:5%;" >Năm</th>
    <th style="width:40%;">Cốt truyện</th>
    <th style="width:15%;">Poster</th>
    <th style="width:5%;">Managed</th>
  </tr> 
  
  <?php
  $i = 0;
  while($row = mysqli_fetch_array($query_lietke_phim)){
    $i++;
  ?>
<tr>
    <td><?php echo $i ?></td>
    <td><?php echo $row['id'] ?></td>
    <td><?php echo $row['moviename'] ?></td>
    <td><?php echo $row['categoryID'] ?></td>
    <td><?php echo $row['moviesstars'] ?></td>
    <td><?php echo $row['director'] ?></td>
    <td><?php echo $row['moviedates'] ?></td>
    <td><?php echo $row['storylines'] ?></td>
    <td><img src="modules/quanlyphim/uploads/<?= $row['poster'] ?>" class="product-prop product-img" alt="<?= $row['moviename'] ?>" title="<?= $row['moviename'] ?>" /></td>
     <td>
        <a href="modules/quanlyphim/xuly.php?iddanhmuc=<?php echo $row['id'] ?>">Xóa</a> | <a href="
        ?action=quanlyphim&query=sua&iddanhmuc=<?php echo $row['id'] ?>">Sửa</a>
    </td>
  </tr>
    <?php
  }
  ?>

</table>
