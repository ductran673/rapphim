<?php
$sql_sua_phim = "SELECT *FROM movies WHERE id='$_GET[iddanhmuc]' LIMIT 1 " ;
$query_sua_phim= mysqli_query($mysqli,$sql_sua_phim);
 ?>
<p>Sua danh muc phim</p>
<table border-style="1px" width="50%" style=" border-collapse: collapse;">
<form method="POST" action="modules/quanlyphim/xuly.php?iddanhmuc=<?php echo$_GET['iddanhmuc']?> "> 
    <?php
     while($dong = mysqli_fetch_assoc($query_sua_phim)){ 
    ?> 
<tr>
    <td>movieID</td>
    <td><input type="text" value=" <?php echo $dong['id'] ?>" name="movieID"></td>
  </tr>
  <tr>
    <td>moviename</td>
    <td><input type="text" value=" <?php echo $dong['moviename'] ?>" name="moviename"></td>
    
  </tr>
  <tr>
    <td>category</td>
    <td><input type="text" value=" <?php echo $dong['categoryID'] ?>" name="category"></td>
    
  </tr>
  <tr>
    <td>moviestars</td>
    <td><input type="text" value=" <?php echo $dong['moviesstars'] ?>" name="moviestars"></td>
    
  </tr>
  <tr>
    <td>director</td>
    <td><input type="text" value=" <?php echo $dong['director'] ?>" name="director"></td>
    
  </tr>
  <tr>
    <td>moviedates</td>
    <td><input type="text" value=" <?php echo $dong['moviedates'] ?>" name="moviedates"></td>
    
  </tr>
  <tr>
    <td>storylines</td>
    <td><input type="text" value=" <?php echo $dong['storylines'] ?>" name="storylines"></td>
    
  </tr>
  <tr>
    <td>poster</td>
    <td><input type="text" value=" <?php echo $dong['poster'] ?>" name="poster"></td>
    
  </tr>
  

  <tr>
    <td colspan="2"><input type="submit" name="suadanhmuc" value="Sua danh muc phim"></td>
  </tr>
  <?php
     }
    ?>
  </form>  
</table>