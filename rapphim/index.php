<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/styles.css" >
    <link rel="stylesheet" href="./assets/responsive.css" >
    <link rel="stylesheet" href="style.css">
    <title>Rạp Chiếu Phim</title>

</head>
<style>
    body{
        background-color: #ffffff;
    }
</style>
<body>
    <div class="session-user" style="border-style:solid; border-color:pink;">
    <?php
    session_start();
    if(isset($_SESSION['AdminLoginId'])   ){
        echo '<h3 style="color:pink">Xin chào: '.$_SESSION["AdminLoginId"].' </h3>';
        echo '<a href="/rapphim/register/logout.php"> Đăng xuất</a>';
        
    }
      else{
     session_unset();
    }
    ?>
    </div>
<header id="wrapper"  >
       
      <?php include('./views/menu.php');
      if(isset($_GET['act'])){
        switch($_GET['act']){
            case 'taikhoan':
                include "views/taikhoan.php";
                break;
            case 'khamphaphim':
                include "khamphaphim.php";
                break;
            case 'dangnhap':
                include "register/login.php";
                break;
            case 'dangki':
                    include "register/registration.php";
                    break;
            case 'thanhtoan':
                include "timkiem/viewcart.php";
                break;
                case 'lichchieu':
                    include "timkiem/findmovie.php";
                    break;
            default:

             include "footer.php";
            break;
        }}else{
            include "footer.php";
            }?>


       
       
