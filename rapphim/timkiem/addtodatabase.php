<?php
session_start();
ob_start();
include_once '../connect_db.php';
$_SESSION['socho']++;
$i = $_SESSION['socho'];


if (isset($_GET['button']) && ($_GET['button'])) {


    if (isset($_SESSION['tencho'])) 

    // Insert the data into the database
    $sql = "INSERT INTO booking (scheduleID, userID, status) VALUES ( ?, ?, ? )";
    $stmt = mysqli_stmt_init($con);
    $prepareStmt = mysqli_stmt_prepare($stmt,$sql);
    if ($prepareStmt ) {
        mysqli_stmt_bind_param($stmt,"sss",$id, $ghe[1], $_SESSION['trangthai']);
        mysqli_stmt_execute($stmt);
        echo "<div class='alert alert-success'>You are registered successfully.</div>";
    }else{
        die("Something went wrong");
    }
   
}

// Redirect back to the seat page
header('Location: viewcart.php');

exit;
?>