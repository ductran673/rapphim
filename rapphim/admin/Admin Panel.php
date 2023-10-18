
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet"  href="style.css">
        <link rel="stylesheet" type="text/css" href="css/styleadmincp.css">
    <title>Admin Panel</title>
    
</head>
   
<style>
    table {
      border-collapse: collapse;
      width: 100%;
    }

    th, td {
      padding: 8px;
      text-align: left;
      border-bottom: 1px solid #ddd;
    }

    th {
      background-color: #f2f2f2;
    }

    tr:hover {
      background-color: #f5f5f5;
    }
  </style>
<body>
    <?php
    include './headeradmin.php';
    ?>
    <div class="wrapper">
    <?php
    include("config/config.php");
    include("modules/header.php");
    include("modules/main.php");
    
    ?>
    </div>
   <?php if(isset($_GET['action'])){
        switch($_GET['action']){
            case 'quanlyrap':
                include "./modules/quanlyrap/lietke.php";
                break;
           
            case 'quanlydatve':
                include "./modules/quanlydatve/lietke.php";
                break;
               
            
        }}else{
          include_once "thongke.php";
          include_once "./modules/footer.php";
            }
?>
  


<?php
if(isset($_POST['logout']))
{
    session_destroy();
    header("location: Admin Login.php");
}
?>


</body>
</html>