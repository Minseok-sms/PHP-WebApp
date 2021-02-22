<?php
  require("config.php");
  require("db.php");
  $conn = db_init($config["host"],$config["duser"],$config["dname"]);
  $sql = "SELECT * FROM user WHERE name ='".$_POST['author']."'";
  $result = mysqli_query($conn, $sql);

  $sql2 = "SELECT * FROM topic WHERE title = '".$_POST['title']."'";
  $result2 = mysqli_query($conn,$sql2);
  $row2 = mysqli_fetch_assoc($result2);


  if($result->num_rows == 0){
    $sql =  "INSERT INTO user (name, password) VALUES('".$_POST['author']."', '111111')";
    mysqli_query($conn,$sql);
    $user_id = mysqli_insert_id($conn);
  }else{
    $row = mysqli_fetch_assoc($result);
    $user_id = $row['id'];
  }

  $sql = "UPDATE topic SET title = '".$_POST['title']."', description = '".$_POST['description']."', author = '".$user_id."' WHERE topic.id = '".$row2['id']."'";
  $result = mysqli_query($conn, $sql);

  header('Location: index.php?id='.$row2['id'].'');
  ?>
