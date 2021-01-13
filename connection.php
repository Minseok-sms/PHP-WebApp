<?php
  $conn = mysqli_connect('localhost','root');
  mysqli_select_db($conn, 'opentutorials');

  if(!$conn){
    die('Please Check Your Connection'.mysqli_error());
  }

 ?>
