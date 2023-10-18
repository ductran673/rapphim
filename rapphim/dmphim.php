<?php
$servername="localhost";
$username="root";
$password="";
$databasename="rapphim";
$link=new mysqli($servername,$username, $password, $databasename);
$sql="select * from movies";
$kq=$link->query($sql);


 include_once (__DIR__ . "/views/content.php");

?>
