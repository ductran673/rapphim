<?php
session_start();
if(!isset($_SESSION['AdminLoginId']))
{
    header("location: Admin Login.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<style>
        body {
            margin: 0px;
            
        }
        div.header {
            
            font-family: poppins;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 0px 60px 5px;
            background-color:black;
            color:pink;
        }
        button{
            background-color: pink;
            font-size:16px;
            font-weight:550;
            padding: 8px 12px;
            border: 2px solid black ;
            border-radius:5px;


        }
    </style>
<body> 
<div class="header">
    <h1> Chào bạn đến trang Admin - <?php echo $_SESSION['AdminLoginId'] ?></h1>
    <form method="POST">
    <div class="home">
                    <a href="/rapphim/admin/Admin Panel.php">HOME</a>
                </div>
    <button name="logout"> LOG OUT </button>
    </form>
    </div>
    <?php
if(isset($_POST['logout']))
{
    session_destroy();
    header("location: Admin Login.php");
}
?>
</body>
</html>