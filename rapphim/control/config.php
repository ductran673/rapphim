<?php
define("servername", "localhost");
define("username", "root");
define("password", "");
define("databasename", "moviecinemadatabase");
$con = mysqli_connect($host, $user, $password, $database);
if (mysqli_connect_errno()){
    echo "Connection Fail: ".mysqli_connect_errno();exit;
}

?>