<?php
session_start();

// Khởi tạo mảng lưu trữ trạng thái ghế
if (!isset($_SESSION['seats'])) {
    // Tạo mảng các ghế có trạng thái mặc định (màu vàng)
    $seats = array_fill(1, 10, 'available');
    $_SESSION['seats'] = $seats;
} else {
    $seats = $_SESSION['seats'];
}

// Xử lý submit form
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Kiểm tra ghế được chọn từ form
    if (isset($_POST['seat'])) {
        $selectedSeat = $_POST['seat'];
        
        // Kiểm tra trạng thái hiện tại của ghế
        if ($seats[$selectedSeat] === 'available') {
            // Thay đổi trạng thái ghế thành "đang chọn" (màu xanh)
            $seats[$selectedSeat] = 'selected';
        } elseif ($seats[$selectedSeat] === 'selected') {
            // Thay đổi trạng thái ghế thành "sẵn sàng" (màu vàng)
            $seats[$selectedSeat] = 'available';
        }
        
        // Lưu trạng thái ghế mới vào session
        $_SESSION['seats'] = $seats;
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Chọn ghế</title>
    <?php if($seatClass = 'selected' && isset($_POST['seat'])) echo array($selectedSeat);?>
    <style>
        .seat {
            display: inline-block;
            width: 50px;
            height: 50px;
            margin: 5px;
            text-align: center;
            line-height: 50px;
            font-weight: bold;
        }
        .available {
            background-color: yellow;
        }
        .selected {
            background-color: green;
        }
        .taken {
            background-color: red;
        }
    </style>
</head>
<body>
    <h1>Chọn ghế</h1>
    <form method="POST" action="">
        <?php
        // Hiển thị các ghế
        foreach ($seats as $seatNumber => $seatStatus) {
            $seatClass = '';
            switch ($seatStatus) {
                case 'available':
                    $seatClass = 'available';
                    break;
                case 'selected':
                    $seatClass = 'selected';
                    break;
                case 'taken':
                    $seatClass = 'taken';
                    break;
                default:
                    $seatClass = 'available';
                    break;
            }
            echo '<button class="seat ' . $seatClass . '" type="submit" name="seat" value="' . $seatNumber . '">' . $seatNumber . '</button>';
        }
        ?>
    </form>
</body>
</html>
