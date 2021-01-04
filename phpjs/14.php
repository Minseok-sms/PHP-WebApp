<!DOCTYPE html>
<?php
  $conn = mysqli_connect("localhost", "root");
  mysqli_select_db($conn, "opentutorials");
  $sql = "SELECT * FROM user WHERE name ='".$_GET['name']."' AND password='".$_GET['password']."'";
  echo $sql;
  $result = mysqli_query($conn, $sql);
 ?>
<html>
  <head>
    <meta charset="utf-8">
  </head>
  <body>
    <?php
      $password = $_GET["password"];
      if($password == "1111")
        echo "hello connect";
      else {
        echo "disconnect";
      }
     ?>
  </body>
</html>
