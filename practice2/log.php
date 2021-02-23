<?php
  require("config.php");
  require("db.php");
  session_start();
  $conn = db_init($config["host"],$config["duser"],$config["dname"]);
  if(isset($_POST['Login'])){
    if(empty($_POST['Uname']) || empty($_POST['Password'])){
      header("Location: login.php?Empty= Please Fill in the Blanks");
    }else{
      $sql = "SELECT * FROM employee where Uname = '".$_POST['Uname']."' and Password = '".$_POST['Password']."'";
      $result = mysqli_query($conn,$sql);
      if(mysqli_fetch_assoc($result)){
        $_SESSION['user'] = $_POST['Uname'];
        header("Location: index.php");
      }else{ // 아이디비번이 틀렷을시
        header("Location: login.php?Invalid = Please Enter Correct User Name and Password");
      }
    }

  }else{

  }



 ?>
