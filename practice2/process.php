<?php
  require("config.php");
  require("db.php");
  $conn = db_init($config["host"],$config["duser"],$config["dname"]);
  $result = mysqli_query($conn,"SELECT * FROM topic");
  $sql = "SELECT * FROM user WHERE name='".$_POST['author']."'";
  $result = mysqli_query($conn, $sql);
  if($result -> num_rows == 0){ //작성자가 새로운사람이
    $sql = "INSERT INTO user (name, password) VALUES ('".$_POST['author']."','111111')";
    mysqli_query($conn, $sql);
    $user_id = mysqli_insert_id($conn); //마지막 들어간 id값
  }else{
    $row = mysqli_fetch_assoc($result); //
    $user_id = $row['id'];
  }
  $sql = "INSERT INTO topic (title,description,author,created) VALUES ('".$_POST['title']."','".$_POST['description']."','".$user_id."',now())";
  mysqli_query($conn,$sql);
  header('Location: index.php');

 ?>
