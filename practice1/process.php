<?php
//데이터베이스접/
  $config = array(
          "host"=>"localhost",
          "duser"=>"root",
          "dname"=>"opentutorials2"
        );
          function db_init($host,$duser,$dname){
            $conn = mysqli_connect($host, $duser);
            mysqli_select_db($conn, $dname);
            return $conn;
          }
  $conn = db_init($config["host"],$config["duser"],$config["dname"]);
  //저자가 user테이블에 존재하는지 여부를 채크.
  $sql = "SELECT * FROM user WHERE name ='".$_POST['author']."'";
  //존재한다면 user테이블에 user.id를 알아냄.
  $result = mysqli_query($conn,$sql);
  if($result->num_rows > 0){ //존재한다면
    $row = mysqli_fetch_assoc($result);
    $user_id = $row['id'];
  }else{ // 존재하지않으면 저자를 user에추가후 id값을 알아냄
    $sql =  "INSERT INTO user (name, password) VALUES('".$_POST['author']."', '111111')";
    mysqli_query($conn,$sql);
    $user_id = mysqli_insert_id($conn);
  }
  $sql = "INSERT INTO topic (title,description,author,created) VALUES('".$_POST['title']."','".$_POST['description']."','".$user_id."', now())";
  $result = mysqli_query($conn, $sql);
  header('Location: index.php');




 ?>
