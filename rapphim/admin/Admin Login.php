<?php
require("Connection.php");
?>
<html>
    <head>
        <title>Admin Login Panel</title>
        <meta charset="uft-8" name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css">
        <link rel="stylesheet"  href="mycss.css">

    </head>
    <p>Tk: tranxuanduc </p>
    <p>Mk: 12345</p>
    <div class="login-container">
       
        <form method="POST" class="login-form" >
        <h2>ĐĂNG NHẬP TÀI KHOẢN </h2>
            <div class="input-field">
         <!--  <i class="fas fa-user" ></i> -->
            <input type="text" placeholder="Admin Name" name="AdminName">
   </div>

   <div class="input-field">
    <i class="fas fa-look"></i>
    <input type="password" placeholder="Password" name="AdminPassword">
   </div>
   <button type="submit" name="Signin">Sign In</button>
   <div class ="extra">
    <a href="#"> Forgot Password? </a>
   </div>
       </form>
</div>
<?php
if(isset($_POST['Signin']))
{
    $query="SELECT * FROM `admin-login` WHERE `Admin_Name`='$_POST[AdminName]' AND `Admin_Password`='$_POST[AdminPassword]'";
   $result=mysqli_query($con,$query);
   if(mysqli_num_rows($result)==1)
   {
    session_start();
    $_SESSION['AdminLoginId']=$_POST['AdminName'];
    header("location: Admin Panel.php");

   }
   else
   {
    echo"<script>alert('Incorrect Password');</script>";
   }
}

?>

</body>

    </html>