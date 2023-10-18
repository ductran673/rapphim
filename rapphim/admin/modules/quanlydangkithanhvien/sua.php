<?php
$sql_sua_phim = "SELECT *FROM users WHERE id='$_GET[iddanhmuc]' LIMIT 1 " ;
$query_sua_phim= mysqli_query($mysqli,$sql_sua_phim);

 ?>
<p>Quản lý tài khoản</p>
<table border="1" width="50%" style=" border-collapse: collapse;">
<form method="POST" action="modules/quanlydangkithanhvien/xuly.php?iddanhmuc=<?php echo$_GET['iddanhmuc']?> "> 
    <?php
     while($dong = mysqli_fetch_assoc($query_sua_phim)){ 
    ?> 
<tr>
    <td>ID</td>
    <td><input type="text" value=" <?php echo $dong['id'] ?>" name="id"></td>
  </tr>
  <tr>
    <td>Họ và tên</td>
    <td><input type="text" value=" <?php echo $dong['full_name'] ?>" name="fullname"></td>
    
  </tr>
  <tr>
    <td>Email</td>
    <td><input type="text" value=" <?php echo $dong['email'] ?>" name="email"></td>
    
  </tr>
  <tr>
    <td>Mật khẩu </td>
    <td><input type="text" value=" <?php echo $dong['password'] ?>" name="password"></td>
    
  </tr>
  <tr>
    <td>Role</td>
    <td><input type="text" value=" <?php echo $dong['role'] ?>" name="role"></td>
    
  </tr>
  

  <tr>
    <td colspan="2"><input type="submit" name="suadanhmuc" value="Sua danh muc phim"></td>
  </tr>
  <?php
     }
    ?>
  </form>  
</table>