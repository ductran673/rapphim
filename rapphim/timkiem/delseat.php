<?php
session_start();
ob_start();
if(isset($_SESSION['tencho'])) {
    if(isset($_GET['id'])){
      array_splice($_SESSION['tencho'],$_GET['id'],1);
      
    }else{
           session_unset();
           header('location:seat.php');
        }}

  if(isset($_SESSION['tencho'])) {
     if  (count($_SESSION['tencho'])>0) header('location:seat.php');
          else header('location:seat.php');
          }

?>