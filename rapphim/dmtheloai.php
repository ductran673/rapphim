<?php
$servername="localhost";
$username="root";
$password="";
$databasename="moviecinemadatabase";
$link=new mysqli($servername,$username, $password, $databasename);
$sql="select * from catogory";
$kq=$link->query($sql);

 include(__DIR__ . "/views/discovery.php");

?>