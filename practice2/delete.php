<?php
  require("config.php");
  require("db.php");
  $conn = db_init($config["host"],$config["duser"],$config["dname"]);
  $result = mysqli_query($conn,"SELECT * FROM topic");

  $sql = "DELETE FROM topic WHERE topic.id = '".$_GET['id']."'";
  mysqli_query($conn,$sql);
  header("location: index.php");

 ?>
