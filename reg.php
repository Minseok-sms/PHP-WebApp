<?php
  require_once('connection.php');
  if(isset($_POST['Register'])){
      if(empty($_POST['Uname']) || empty($_POST['Password']) || empty($_POST['Email'])){
        header("location: /register.php?Empty = Please Fill in the Blanks");
      }else{
        $query = "SELECT * FROM employee WHERE Uname = '".$_POST['Uname']."'";
        $result = mysqli_query($conn, $query);
        $a = 0;
        while($row = mysqli_fetch_assoc($result)){
          if($row['Uname'] == $_POST['Uname'])
            $a++;
        }
        if($a > 0){
          header("location:/register.php?Exist = User Name already Exist!");
        }
        else{
          $query = "INSERT INTO `employee` (`Uname`, `Password`, `Email`) VALUES('".$_POST['Uname']."','".$_POST['Password']."','".$_POST['Email']."')";
          mysqli_query($conn, $query);
          header("location: /login.php");
      }

  }

}
?>
