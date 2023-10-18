
<?php
$mysqli = new mysqli("localhost","root","","moviecinemadatabase");

// Check connection
if ($mysqli->connect_errno) {
  echo "Ket noi MySQL loi: " . $mysqli->connect_error;
  exit();
}
?>
