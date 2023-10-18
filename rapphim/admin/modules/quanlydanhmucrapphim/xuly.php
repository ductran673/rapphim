<?php 
include("../../config/config.php");
    $moviestars= $_POST['moviestars'];
    $roles= $_POST['roles'];
    if(isset($_POST['add'])){
        //them
        $sql_them = "INSERT INTO tbl_stars(moviestars,roles) VALUE ( '".$moviestars."','".$roles."')";
        mysqli_query($mysqli,$sql_them);
        header("Location: ../../Admin%20Panel.php?action=quanlydienvien&query=them");
    }else  if(isset($_POST['suadanhmuc'])){
    //sua
    $sql_update = "UPDATE tbl_stars SET moviestars='".$moviestars."',roles='".$roles."' WHERE movieID='$_GET[iddanhmuc]'";
    mysqli_query($mysqli,$sql_update);
    header("Location: ../../Admin%20Panel.php?action=quanlydienvien&query=them");
}else{
    $id=$_GET['iddanhmuc'];
    $sql_xoa = "DELETE FROM tbl_stars WHERE movieID='" .$id."'";
    mysqli_query($mysqli,$sql_xoa);
    header("Location: ../../Admin%20Panel.php?action=quanlydienvien&query=them");

}
?>
