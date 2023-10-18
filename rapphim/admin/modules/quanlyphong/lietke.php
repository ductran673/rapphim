<p>Liệt kê các phòng:</p>
<?php
$sql_lietke_danhmucsp = "SELECT *FROM movierooms ORDER BY roomID DESC" ;
$query_lietke_danhmucsp= mysqli_query($mysqli,$sql_lietke_danhmucsp);
 ?>
<table style="width:100%" border="1" style="border-collapse: collapse";>
  <tr>
    <th>ID</th>
    <th>RoomID</th>
    <th>TheaterID</th>
    <th>RoomName</th>
    <th>seats</th>
    <th>VIPSeats</th>
    <th>NormalSeats</th>
    <th>Managed</th>
  </tr> 
  
  <?php
  $i = 0;
  while($row = mysqli_fetch_array($query_lietke_danhmucsp)){
    $i++;
  ?>
<tr>
    <td><?php echo $i ?></td>
    <td><?php echo $row['roomID'] ?></td>
    <td><?php echo $row['theaterID'] ?></td>
    <td><?php echo $row['roomname'] ?></td>
    <td><?php echo $row['seats'] ?></td>
    <td><?php echo $row['VIPseats'] ?></td>
    <td><?php echo $row['normalseats'] ?></td>
     <td>
        <a href="modules/quanlyphong/xuly.php?iddanhmuc=<?php echo $row['roomID'] ?>">Xoa</a> | <a href="
        Admin%20Panel.php??action=quanlyphong&query=sua&iddanhmuc=<?php echo $row['roomID'] ?>">Sua</a>
    </td>
  </tr>
    <?php
  }
  ?>

</table>