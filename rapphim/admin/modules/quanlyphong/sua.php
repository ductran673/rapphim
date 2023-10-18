<?php
$sql_sua_phong = "SELECT *FROM movierooms WHERE roomID='$_GET[iddanhmuc]' LIMIT 1 " ;
$query_sua_phong= mysqli_query($mysqli,$sql_sua_phong);
 ?>
<p>Sua danh muc sp</p>
<table border="1" width="50%" style=" border-collapse: collapse;">
<form method="POST" action="modules/quanlyphong/xuly.php?iddanhmuc=<?php echo$_GET['iddanhmuc']?> "> 
    <?php
     while($dong = mysqli_fetch_assoc($query_sua_phong)){ 
    ?> 
<tr>
    <td>roomid</td>
    <td><input type="text" value=" <?php echo $dong['roomID'] ?>" name="roomID"></td>
  </tr>
  <tr>
    <td>theaterid</td>
    <td><input type="text" value=" <?php echo $dong['theaterID'] ?>" name="theaterID"></td>
    
  </tr>
  <tr>
    <td>roomname</td>
    <td><input type="text" value=" <?php echo $dong['roomname'] ?>" name="roomname"></td>
    
  </tr>
  <tr>
    <td>seats</td>
    <td><input type="text" value=" <?php echo $dong['seats'] ?>" name="seats"></td>
    
  </tr>
  <tr>
    <td>VIPseats</td>
    <td><input type="text" value=" <?php echo $dong['VIPseats'] ?>" name="VIPseats"></td>
    
  </tr>
  <tr>
    <td>normalseats</td>
    <td><input type="text" value=" <?php echo $dong['normalseats'] ?>" name="normalseats"></td>
    
  </tr>
  

  <tr>
    <td colspan="2"><input type="submit" name="suadanhmuc" value="Sua danh muc PHONG"></td>
  </tr>
  <?php
     }
    ?>
  </form>  
</table>