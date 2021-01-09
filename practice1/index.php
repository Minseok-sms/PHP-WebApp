<?php
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
  $result = mysqli_query($conn, "SELECT * FROM topic");
  while($row = mysqli_fetch_assoc($result)){
    echo '<li><a href="index.php?id='.$row['id'].'">'.htmlspecialchars($row['title']).'</a><li>'."\n";
}
$id = $_GET['id'];
$sql = "SELECT * FROM topic WHERE id =".$id;
$sql = "SELECT topic.id, topic.title, topic.description, user.name, topic.created FROM topic LEFT JOIN user ON topic.author = user.id WHERE topic.id = ".$id;
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
echo $row['title'];
echo '<br>';
echo $row['description'];
echo '<br>';
echo $row['name'];
echo '<br>';


?>
