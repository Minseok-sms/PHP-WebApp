<?php
function db_init($host,$duser,$dname){
  $conn = mysqli_connect($host, $duser);
  mysqli_select_db($conn, $name);
  return $conn;
}
 ?>
