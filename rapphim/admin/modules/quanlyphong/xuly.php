<?php 
include("../../config/config.php");
    $roomID= $_POST['roomID'];
    $theaterID= $_POST['theaterID'];
    $roomname= $_POST['roomname'];
    $seats= $_POST['seats'];
    $VIPseats= $_POST['VIPseats'];
    $normalseats= $_POST['normalseats'];
    

    if(isset($_POST['add'])){
        //them
        $sql_them = "INSERT INTO movierooms(roomID,theaterID,roomname,seats,VIPseats,normalseats) VALUE ( '".$roomID."','".$theaterID."','".$roomname."','".$seats."','".$VIPseats."','".$normalseats."')";
        mysqli_query($mysqli,$sql_them);
        header("Location: ../../Admin%20Panel.php?action=quanlyphong&query=them");
    }else  if(isset($_POST['suadanhmuc'])){
    //sua
    $sql_update = "UPDATE movierooms SET roomID='".$roomID."',theaterID='".$theaterID."',roomname='".$roomname."',seats='".$seats."', VIPseats='".$VIPseats."' , normalseats='".$normalseats."' WHERE roomID='$_GET[iddanhmuc]'";
    mysqli_query($mysqli,$sql_update);
    header("Location: ../../Admin%20Panel.php?action=quanlyphong&query=them");
}else{
    $id=$_GET['iddanhmuc'];
    $sql_xoa = "DELETE FROM movierooms WHERE roomID='" .$id."'";
    mysqli_query($mysqli,$sql_xoa);
    header("Location: ../../Admin%20Panel.php?action=quanlyphong&query=them");

}
?>
