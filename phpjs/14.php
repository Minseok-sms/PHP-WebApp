<!DOCTYPE html>
<?php
  $conn = mysqli_connect("localhost", "root");
  mysqli_select_db($conn, "opentutorials");
  $name = mysqli_real_escape_string($conn, $_GET['name']);
  $password = mysqli_real_escape_string($conn, $_GET['password']);
  $sql = "SELECT * FROM user WHERE name ='".$name."' AND password='".$password."'";

  $result = mysqli_query($conn, $sql);
 ?>
<html>
  <head>
    <meta charset="utf-8">
  </head>
  <body>
    <?php
        if($result->num_rows == "0"){
          echo "fail";
        }else {

          echo "success";
        }
     ?>
  </body>
</html>
