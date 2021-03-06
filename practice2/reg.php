<?php
  require("config.php");
  require("db.php");
  $conn = db_init($config["host"],$config["duser"],$config["dname"]);
  if(isset($_POST['Register'])){
    if(empty($_POST['Uname']) || empty($_POST['Password']) || empty($_POST['Email'])){
      header("Location : register.php?Empty=Please Fill in the Blanks");
    }
    else{
      $sql = "SELECT * FROM employee WHERE Uname = '".$_POST['Uname']."'";
      $result = mysqli_query($conn, $sql);
      $a = 0;
      while($row = mysqli_fetch_assoc($result)){
        if($row['Uname'] == $_POST['Uname'])
          $a++;
      }
      if($a > 0){
        header("Location : register.php?Exist=User Name alreay Exist!");
      }else{
        $sql = "INSERT INTO employee (Uname, Password, Email) VALUES ('".$_POST['Uname']."','".$_POST['Password']."','".$_POST['Email']."')";
        mysqli_query($conn, $sql);
        header("Location : login.php");
      }
    }
  }else{

  }

 ?>
