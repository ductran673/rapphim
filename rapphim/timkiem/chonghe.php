
<?php
session_start();
ob_start();
include_once '../connect_db.php';
$_SESSION['socho']++;
$i = $_SESSION['socho'];
$_SESSION['maghe'. $i] = $_GET['maghe'];

if (!isset($_SESSION['status'])) $_SESSION['status']==0;
if (isset($_GET['button']) && ($_GET['button'])) {
    $_SESSION['id'] = $_GET['id'];
    $_SESSION['name'] = $_GET['name'];
    $_SESSION['status'] = $_GET['status'];
    $ghe = array($_SESSION['id'], $_SESSION['name'], $_SESSION['status']+2 );

    if (!isset($_SESSION['tencho'])) {
        $_SESSION['tencho'] = array();
    }

    array_push($_SESSION['tencho'], $ghe);
}


header('location: seat.php');
?>