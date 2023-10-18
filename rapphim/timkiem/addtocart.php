<?php
session_start();
ob_start();

if(!isset($_SESSION['tencho'])) {echo "Mời bạn chọn chỗ ngồi tại đây <a href='seat.php'>Click</a>";}
 if(!isset($_SESSION['cart'])) $_SESSION['cart'] = array();
 if(isset($_SESSION['tencho'])) foreach ($_SESSION['tencho'] as $ghe) { echo "$ghe[1];"; }
if(isset($_POST['addtocart'])&&($_POST['addtocart']) && isset($ghe)){
    // lấy giá trị
    $tenphim = $_POST['tenphim'];
    $tenphong = $_POST['tenphong'];
    $giochieu = $_POST['giochieu'];
    $scheduleid = $_POST['id'];
    $tenghe=  ($ghe[1]);
    // biến $sl có thể thay đổi là $_POST['sl'] nếu form có
    $sl=1;
    $i=0;
    // thêm em $fg theo dõi sự thay đổi của số lượng, nếu nó =0 thì cái sl không thay đổi, nêú =1 thì sl thay đổi rồi cập nhật biến =1
    //cập cái fg =1, chứng tỏ sl đã thay đổi , nó đã làm việc trong giỏ hàng r
    // ra ngoài vòng lặp thì không cần thêm mới sp, fg==0 không, đúng thì thêm mới sp vào giỏ
    $fg=0;
    // tìm và so sánh sp trong giỏ hàng
    
    // $_SESSION["cart"] = [];
    // if(array_key_exists($scheduleid, $_SESSION["cart"])){
    //     $soluong = $_SESSION["cart"][$scheduleid]["soluong"] + 1;
    // }else{
    //     $soluong = 1;
    // }
    //     $ticket = array(
    //         "tenphim" => $tenphim,
    //         "tenphong" => $tenphong,
    //         "giochieu" =>$giochieu,
    //         "soluong" => $soluong
    //     );
    //     $_SESSION["cart"][$scheduleid] = $ticket;


    if(isset($_SESSION['cart'])&&(count($_SESSION['cart'])>0)){
        foreach ($_SESSION['cart'] as $sp) {
            if($sp[0]==$scheduleid){
                // cập nhất mới số lượng
                $sl+=$sp[4];
                $fg=1;
                // cập nhật số lượng mới vào giỏ hàng
                $_SESSION['cart'][$i][4]=$sl;
                break;
            }
            $i++;
        }
    }
    
    //khi số lượng ban dầu không thay đổi thì thêm mới sp vào giỏ hàng
if($fg==0){
    //tạo mảng con
    $sp=array($scheduleid,$tenphim,$tenphong,$giochieu,$sl,$tenghe);
    // thêm vào giỏ hàng
    //$SESSION['cart'][]=$sp;
  
    array_push($_SESSION['cart'],$sp);
}
    //chuyển trang
    header('location:bookingview.php');
}
?>