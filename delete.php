<?php
require("config/config.php");
require("lib/db.php");
$conn = db_init($config["host"],$config["duser"],$config["dname"]);
$sql = "DELETE FROM topic WHERE topic.`id` = '".$_GET['id']."'";
$result = mysqli_query($conn, $sql);
header("location:/index.php");
 ?>
