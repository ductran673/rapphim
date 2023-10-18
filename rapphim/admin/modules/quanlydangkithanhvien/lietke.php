<p>Liệt kê danh mục phim</p>
<?php
$sql_lietke_phim = "SELECT *FROM users ORDER BY id DESC" ;
$query_lietke_phim= mysqli_query($mysqli,$sql_lietke_phim);
 ?>
<table style="width:100%" border="1" style="border-collapse: collapse";>
  <tr>
    <th>STT</th>
    <th>ID user</th>
    <th>Họ và tên</th>
    <th>Email</th>
    <th>Mật khẩu</th>
    <th>Role</th>
    <th>Hành động</th>
  </tr> 
  
  <?php
  $i = 0;
  while($row = mysqli_fetch_array($query_lietke_phim)){
    $i++;
  ?>
<tr>
    <td><?php echo $i ?></td>
    <td><?php echo $row['id'] ?></td>
    <td><?php echo $row['full_name'] ?></td>
    <td><?php echo $row['email'] ?></td>
    <td><?php echo $row['password'] ?></td>
    <td><?php echo $row['role'] ?></td>
     <td>
        <a href="modules/quanlydangkithanhvien/xuly.php?iddanhmuc=<?php echo $row['id'] ?>">Xóa</a> | <a href="
        ?action=quanlydangkithanhvien&query=sua&iddanhmuc=<?php echo $row['id'] ?>">Sửa</a>
    </td>
  </tr>
    <?php
  }
  ?>

</table>