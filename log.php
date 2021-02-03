<?php
require_once('connection.php');
session_start();
  if(isset($_POST['Login'])){
    if(empty($_POST['Uname']) || empty($_POST['Password'])){
      header("location:/login.php?Empty= Please Fill in the Blanks");
    }
    else {
      $query="SELECT * FROM employee where Uname='".$_POST['Uname']."' and Password='".$_POST['Password']."'";
      $result = mysqli_query($conn, $query);
      if(mysqli_fetch_assoc($result)){ // 아이디비번이 맞다면 세션은 user로하고 index.php에접속
        $_SESSION['user']=$_POST['Uname'];
        header("location:/index.php");
      }else{//아이디비번 불일치시
        header("location:/login.php?Invalid= Please Enter Correct User Name and Password");

      }
    }
  }else {

  }

 ?>
