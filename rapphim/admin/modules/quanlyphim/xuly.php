<?php 
include("../../config/config.php");
    $movieID= $_POST['movieID'];
    $moviename= $_POST['moviename'];
    $category= $_POST['category'];
    $moviestars= $_POST['moviestars'];
    $director= $_POST['director'];
    $moviedates= $_POST['moviedates'];
    $storylines= $_POST['storylines'];
    $poster = $_FILES['poster']['name'];
    $poster_tmp = $_FILES['poster']['tmp_name'];
    $poster = time().'_'.$poster;
    

    if(isset($_POST['add'])){
        //them
        $sql_them = "INSERT INTO movies(id,moviename,categoryID,moviesstars,director,moviedates,storylines,poster) VALUE ( '".$movieID."','".$moviename."','".$category."','".$moviestars."','".$director."','".$moviedates."','".$storylines."','".$poster."')";
        mysqli_query($mysqli,$sql_them);
        header("Location: ../../Admin%20Panel.php?action=quanlyphim&query=them");
    }else  if(isset($_POST['suadanhmuc'])){
    if($_POST['hinhanh']){
    $sql_update = "UPDATE movies SET id='".$movieID."',moviename='".$moviename."',categoryID='".$category."',moviesstars='".$moviestars."',director='".$director."',moviedates='".$moviedates."',storylines='".$storylines."',poster='".$poster."' WHERE id='$_GET[iddanhmuc]'";
    }else{
        $sql_update = "UPDATE movies SET id='".$movieID."',moviename='".$moviename."',categoryID='".$category."',moviesstars='".$moviestars."',director='".$director."',moviedates='".$moviedates."',storylines='".$storylines."' WHERE id='$_GET[iddanhmuc]'";
 
    }
    mysqli_query($mysqli,$sql_update);
    header("Location: ../../Admin%20Panel.php?action=quanlyphim&query=them");
}else{
    $id=$_GET['iddanhmuc'];
    $sql_xoa = "DELETE FROM movies WHERE id='" .$id."'";
    mysqli_query($mysqli,$sql_xoa);
    header("Location: ../../Admin%20Panel.php?action=quanlyphim&query=them");

}
?>
