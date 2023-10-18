<p>Liet ke danh muc san pham</p>
<?php
$sql_lietke_danhmucsp = "SELECT *FROM tbl_stars ORDER BY moviestars DESC" ;
$query_lietke_danhmucsp= mysqli_query($mysqli,$sql_lietke_danhmucsp);
 ?>
<table style="width:100%" border="1" style="border-collapse: collapse";>
  <tr>
    <th>ID</th>
    <th>Moviestars</th>
    <th>Roles</th>
    <th>Managed</th>
  </tr> 
  
  <?php
  $i = 0;
  while($row = mysqli_fetch_array($query_lietke_danhmucsp)){
    $i++;
  ?>
<tr>
    <td><?php echo $i ?></td>
    <td><?php echo $row['moviestars'] ?></td>
    <td><?php echo $row['roles'] ?></td>
     <td>
        <a href="modules/quanlydanhmucrapphim/xuly.php?iddanhmuc=<?php echo $row['movieID'] ?>">Xóa </a> | <a href="
        ?action=quanlydienvien&query=sua&iddanhmuc=<?php echo $row['movieID'] ?>">Sửa</a>
    </td>
  </tr>
    <?php
  }
  ?>

</table>