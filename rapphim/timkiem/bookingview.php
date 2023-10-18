<?php
session_start();

 if(isset($_SESSION['cart']) && isset($_SESSION['tencho'])){
   
 //  echo var_dump($_SESSION['cart']);

?>
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
  <h1>Quản lý thông tin đặt vé</h1>
  
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
       
        <th>Hành động</th>
      </tr>
    </thead>
    <tbody>
    <?php
     $tong=0;
     $i=0;
     $j=1;
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
        
        <td><a href="delcart.php?id='.$i.'">Hủy vé</td>
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
    <tr>
      <td colspan="6">Tổng đơn hàng </td>
      <td style="background-color:#CCC; "> <?php echo $tong; ?></td>
      <td><a href="../Payment/payment.php">Thanh toán</a></td>
    </tr>
  </table>
    </br>
  <div id="message">
    <!-- Thông báo sẽ được hiển thị ở đây -->
  </div>


  <h2> Thông tin các ghế được chọn </h2>
  <table>
    <thead>
      <tr>
      <th>STT</th>
        <th>Mã ghế</th>
        <th>Giá tiền</th>
      </tr>
    </thead>
    <tbody>
      <!-- Thêm các hàng và cột dữ liệu tại đây
      <tr>
      <td>1</td>
        <td>A1</td>
        <td>45000</td>
      </tr>
      <tr>
      <td>2</td>
        <td>A2</td>
        <td>50000</td>
      </tr>
    </tbody> -->
    <?php foreach ($_SESSION['tencho'] as $ghe) {


    echo'<tr>
   <td>'.($j).'</td>'
   ?>
   <td><?php   { echo "$ghe[1]"; } ?></td>
   
 <td> <?php echo "45000" ?></td>
    <tr>
 <?php   $j++;
 }
?>
    </tbody>
      <td colspan="2">Tổng đơn hàng </td>
      <td style="background-color:#CCC; "> <?php echo $tong; ?></td>
    </tr>
    </table>
    <br> 
    <tr>
        <td><button name="button" value="OK" type="submit" onclick="location.href='addtodatabase.php'" >Xác nhận đặt vé</button></td>
        <td><button name="nuttrove" value="OK" type="submit" onclick="location.href='findmovie.php'" >Tiếp tục đặt vé</button></td>
    </tr>
  
</body>
</html>
<?php } ?>