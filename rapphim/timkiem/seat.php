<?php
session_start();
//ob_start();
if(!isset($_SESSION['socho']))
$_SESSION['socho']=0;




?>
<!DOCTYPE html>
<html>
<head>
  <title>Rạp chiếu phim</title>
  <style>
   .h2{
    align-content: center;
    margin: auto; 
     width: 7%; 
      border: 3px solid purple;
        padding-bottom: 10px;
   }
   .body{
    width: 1200px;
    margin: 0 auto;
   }
   .contain{
    border: 1px solid #ccc;
    padding: 30px;
    width: 100%;
    height: 100%;
display: flex;
flex-direction: row;
flex-wrap: wrap;
   }

     .container {
      float: left;
    width: 23%;
    margin: 1%;
    padding: 10px;
    box-sizing: border-box;
    border: 1px solid #ccc;
    line-height: 26px;
    width: 15%;
   flex: 1 10%;
    height: 100%;

justify-content: center;
align-items: center;
margin-bottom: 20px;
   
    }
  
    .seat {
      position: relative;
      width: 30px;
      height: 30px;
      margin: 5px;
      background-color: #ccc;
      display: inline-block;
    }
    
    .selected {
      background-color: #ff0000;
    }
    .wait{
        background-color: green;
    }
  </style>
</head>

<body>
<?php
        include_once '../connect_db.php';
        // Câu truy vấn SQL
$sql = "SELECT * FROM seat";

// Thực thi truy vấn SQL
$result = mysqli_query($con, $sql);

// Kiểm tra và lấy giá trị ID
        ?>

  <h1>Rạp chiếu phim</h1>
  <h2>Số ghế được chọn:  <?php if(isset($_SESSION['tencho'])) echo count($_SESSION['tencho']);  ?></h2>

  <h2>Số ghế được chọn:  <?php if(isset($_SESSION['tencho'])) foreach ($_SESSION['tencho'] as $ghe) { echo "$ghe[1] ,"; } ?></h2>
  <button name="addtocart" value="OK" type="submit" onclick="location.href='findmovie.php'" >Xác nhận</button>
  <button name="addtocart" value="OK" type="submit" onclick="location.href='delseat.php'" >Chọn lại</button>
  <h2 class="h2">Màn hình</h2>
 
  
  <div class="contain">
<?php
if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
?>
<div class="container" >
    <fieldset>
    <legend>Chọn ghế:<?=$row['id']?></legend>
    
    <?php if ($row['status'] == 1) { ?>
        <div class="seat selected"><?=$row['name']?></div>
    
    <?php }

    // Kiểm tra và hiển thị ghế đã chọn
    if (isset($_SESSION['tencho']) && isset($_SESSION['status'])) {
        $isSeatSelected = false; // Biến cờ

        foreach ($_SESSION['tencho'] as $ghe) {
            if ($ghe[2] == 2) {
                if ($ghe[0] == $row['id']) {
                    $isSeatSelected = true;
                    $_SESSION['selectedFieldset'] = $row['id']; // Lưu fieldset được chọn
                    break; // Thoát khỏi vòng lặp nếu tìm thấy ghế đã chọn
                }
            }
        }

        if ($isSeatSelected) {
            echo '<div class="seat wait">' . $ghe[1] . '</div>';
        }
    } ?>
    <?php   { ?>
        <?php if (isset($_SESSION['socho']) || !isset($_SESSION['status'])) {
          if($row['status'] == 0){ ?>
            <form action="chonghe.php" method="get">
                
                <input type="hidden" name="id" value="<?php echo $row['id'];?>">
                <input type="hidden" name="name" value="<?php echo $row['name'];?>">
                <input type="hidden" name="status" value="<?php echo $row['status'];?>">
                <?php if (!isset($_SESSION['selectedFieldset']) || $_SESSION['selectedFieldset'] !== $row['id']) { ?>
                  <div class="seat"><?=$row['name']?></div>
                    <button name="button" value="OK" type="submit" onclick="location.href='chonghe.php?maghe=<?php echo $row['id'];?>'" >Chọn chổ</button>
                <?php } ?>
            </form>
        <?php }}}?>
    </fieldset>
</div>

<br>
<?php } } ?>
</div>


  

</body>
</html>