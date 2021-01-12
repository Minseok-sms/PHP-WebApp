<?php
$config = array(
        "host"=>"localhost",
        "duser"=>"root",
        "dname"=>"myProjects"
      );
        function db_init($host,$duser,$dname){
          $conn = mysqli_connect($host, $duser);
          mysqli_select_db($conn, $dname);
          return $conn;
        }
$conn = db_init($config["host"],$config["duser"],$config["dname"]);
?>
