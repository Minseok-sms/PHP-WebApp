<!DOCTYPE html>
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
 ?>
<html>
  <head>
    <meta charset="utf-8">
    <style>
      body{
        margin: 0;
      }
      header{
        border-bottom: 1px solid grey;
        padding-left: 45px;
        text-align: center;
      }
      nav{
        border-right: 1px solid grey;
        width: 200px;
        height: 700px;
        float: left;
      }
      nav ul{
        margin: 0;
        padding: 20px;
        list-style: none;
      }
      #content{
        padding-left : 20px;
        float:left;
        width: 600px;
      }
      body.black{
        background-color:black;
        color:white;
      }
      body.white{
        background-color:white;
      }
    </style>
  </head>

  <body id = "body">
    <header>
      <h1><a href ="index.php">SeoMinSeok</h1>
    </header>
    <nav>
      <ul>
        <?php
          $result = mysqli_query($conn, "SELECT * FROM topic");
          while($row = mysqli_fetch_assoc($result)){
            echo '<li><a href="index.php?id='.$row['id'].'">'.htmlspecialchars($row['title']).'</a><li>';
        }
         ?>
      </ul>
    </nav>
    <div id = "content">
    <article>
        <form class="" action="process.php" method="post">
          <p>
            <laber for ="title">제목 : </label><input id = "title" type="text" name="title" value="" placeholder="제목을 입력해주세요.">
          </p>
          <p>
            <laber for ="author">저자 : </label><input id = "author" type="text" name="author" value="" placeholder="제목을 입력해주세요.">
          </p>
          <p>
            <label for="description"></label>본문 : <textarea name="description" rows="8" cols="80"></textarea>
          </p>
          <p>
            <input type="submit" name="" value="전송">
          </p>
        </form>

    </article>
      <input type="button" name="name" value="White" onclick="document.getElementById('body').className = 'white'">
      <input type="button" name="name" value="Black" onclick="document.getElementById('body').className = 'black'">
      <a href="write.php">쓰기</a>
    </div>
  </body>
</html>
