<?php 
include("../../config/config.php");
    $id= $_POST['id'];
    $full_name= $_POST['fullname'];
    $email= $_POST['email'];
    $password= $_POST['password'];
    $role= $_POST['role'];
    

    if(isset($_POST['add'])){
        //them
        $sql_them = "INSERT INTO users(id,full_name,email,password,role) VALUE ( '".$id."','".$full_name."','".$email."','".$password."','".$role."')";
        mysqli_query($mysqli,$sql_them);
        header("Location: ../../Admin%20Panel.php?action=quanlydangkithanhvien&query=them");
    }else  if(isset($_POST['suadanhmuc'])){
    //sua
    $sql_update = "UPDATE users SET id='".$id."',full_name='".$full_name."',email='".$email."',password='".$password."',role='".$role."' WHERE id='$_GET[iddanhmuc]'";
    mysqli_query($mysqli,$sql_update);
    header("Location: ../../Admin%20Panel.php?action=quanlydangkithanhvien&query=them");
}else{
    $id=$_GET['iddanhmuc'];
    $sql_xoa = "DELETE FROM users WHERE id='" .$id."'";
    mysqli_query($mysqli,$sql_xoa);
    header("Location: ../../Admin%20Panel.php?action=quanlydangkithanhvien&query=them");

}
?>
