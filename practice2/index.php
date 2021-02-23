<?php
  require("config.php");
  require("db.php");
  $conn = db_init($config["host"],$config["duser"],$config["dname"]);
  $result = mysqli_query($conn,"SELECT * FROM topic");
 ?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>

    </title>
    <link rel="stylesheet" href="style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

  </head>
  <body id = "change">
    <div class="alert alert-info" role="alert" font-size= "5px">
      <?php
        session_start();
        if(!$_SESSION['user']){ // 로그인 하지못햇을시 무조건 login.php거침.
          header('location: login.php');
        }
        else{
          echo 'Welcome : '.$_SESSION['user'];
        }
       ?>
       <form class="" action="login.php" method="post">
         <input type="submit" name="" value="logout" class = "btn btn-secondary">
       </form>
    </div>
    <header>
      <h1><a href = "index.php">JavaScript</a></h1>
    </header>
    <nav>
      <ul>
        <?php
            while($row = mysqli_fetch_assoc($result)){
              echo '<li><a href="index.php?id='.$row['id'].'">'.htmlspecialchars($row['title']).'</a><li>'."\n";
          }
         ?>
      </ul>
    </nav>
    <div id = "content">
      <?php
        if(isset($_GET['id'])){ ?>
          <a href="delete.php?id=<?=$_GET['id']?>" class = "btn btn-primary">DELETE</a>
          <a href="revise.php?id=<?=$_GET['id']?>" class = "btn btn-primary">REVISE</a>
        <?php }?>

      <article>
        <?php
          if(empty($_GET['id']) == false){
            $id = mysqli_real_escape_string($conn,$_GET['id']);
            $sql = "SELECT topic.id, topic.title, topic.description, user.name, topic.created
            FROM topic LEFT JOIN user ON topic.author = user.id WHERE topic.id = ".$id;
            $result = mysqli_query($conn, $sql);
            $row = mysqli_fetch_assoc($result);

            echo '<h2>'.htmlspecialchars($row['title']).'</h2>';

            echo htmlspecialchars($row['created']);
            echo '<p>'.htmlspecialchars($row['name']).'</p>';
            echo strip_tags($row['description'],'<a><h1><h2><h3><li><ol>');

          }else{
            echo '<h2>'.'welcome to my homepage'.'</h2>';
          }
          ?>
      </article>
      <div id = "control">
        <div class="btn-group" role="group" aria-label="Basic example">
          <input type="button"class="btn btn-primary" value = "white" onclick = "document.getElementById('change').className = 'white'"/>
          <input type="button"class="btn btn-secondary" value = "black" onclick = "document.getElementById('change').className = 'black'"/>
          <a href="write.php" class="btn btn-success">Write</a>
        </div>
      </div>
    </div>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
    -->
  </body>
</html>
