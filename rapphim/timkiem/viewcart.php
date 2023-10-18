<?php
session_start();

 if(isset($_SESSION['cart']) ){
   
 //  echo var_dump($_SESSION['cart']);

?>
<script> alert ("Bạn đã đặt vé thành công <3")</script>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Quản lý đơn hàng</title>
  <link rel="stylesheet" href="giohang.css">
  <script src="giohang.js"></script>
</head>
<body>
  <h1>Vé bạn đã đặt</h1>
  
  <table>
    <thead>
      <tr>
        <th>Số thứ tự</th>
        <th>Tên phim</th>
      
        <th>Khung Giờ Chiếu</th>
        <th>Phòng chiếu</th>
        <th>Số lượng</th>
        <th>Ghế Ngồi</th>
        <th>Tổng tiền</th>
      </tr>
    </thead>
    <tbody>
    <?php
     $tong=0;
     $i=0;
     foreach ($_SESSION['cart'] as $sp) {

      $thanhtien= count($_SESSION['tencho'])*450000;
      $tong+=$thanhtien;
      echo'<tr>
        <td>'.($i+1).'</td>
        <td>'.$sp[1].'</td>
       
        <td>'.$sp[3].'</td>
        <td>'.$sp[2].'</td>'
        ?>
        <td><?php echo count($_SESSION['tencho']);?></td>
        <td><?php if(isset($_SESSION['tencho'])) foreach ($_SESSION['tencho'] as $ghe) { echo "$ghe[1];"; } ?></td>
        <?php echo
       ' <td>'.$thanhtien.'</td>
        
        
      </tr>';
      $i++;
     }
     ?>
      <!-- <tr>
        <td></td>
        <td></td>
        <td>2</td>
        <td></td>
        <td></td>
        <td>Ghế A1, A2</td>
        <td>40,000 VND</td>
        <td><a href="../Payment/payment.php">Thanh toán</a></td>
        <td><button class="button" onclick="cancelOrder(this.parentNode.parentNode)">Hủy đặt</button></td>
      </tr> -->
     

 

      <!-- Thêm các hàng đơn hàng khác vào đây -->
    </tbody>
  </table>
  <p><?php  echo '<br>Tiếp tục mua vé. <a href="findmovie.php?idgiohang"> Click! </a> vào đây'; ?></p>
  <div id="message">
    <!-- Thông báo sẽ được hiển thị ở đây -->
  </div>
  <p><a href="delcart.php">Xóa giỏ hàng</a></p>
</body>
</html>
<?php 
} else {
   echo '<br>Giỏ hàng rỗng. Bạn muốn đặt <a href="findmovie.php"> Click! </a> vào đây';
}

?>