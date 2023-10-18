<?php
$sql_sua_danhmucsp = "SELECT *FROM tbl_stars WHERE movieID='$_GET[iddanhmuc]' LIMIT 1 " ;
$query_sua_danhmucsp= mysqli_query($mysqli,$sql_sua_danhmucsp);
 ?>
<p>Sua danh muc sp</p>
<table border="1" width="50%" style=" border-collapse: collapse;">
<form method="POST" action="modules/quanlydanhmucrapphim/xuly.php?iddanhmuc=<?php echo$_GET['iddanhmuc']?> "> 
    <?php
     while($dong = mysqli_fetch_assoc($query_sua_danhmucsp)){ 
    ?> 
<tr>
    <td>moviestars</td>
    <td><input type="text" value=" <?php echo $dong['moviestars'] ?>" name="moviestars"></td>
  </tr>
  <tr>
    <td>roles</td>
    <td><input type="text" value=" <?php echo $dong['roles'] ?>" name="roles"></td>
    
  </tr>
  <tr>
    <td colspan"2"><input type="submit" name="suadanhmuc" value="Sua danh muc san pham"></td>
  </tr>
  <?php
     }
    ?>
  </form>  
</table>