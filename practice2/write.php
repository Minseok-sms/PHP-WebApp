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
    <link rel="stylesheet" href="style.css?after">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

  </head>
  <body id = "change">
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
      <article>
        <form action="process.php" method="post">
          <div class="form-group">
            <p>
              <label for="exampleInputEmail1">제목<input type="text" class="form-control" size = 100 name="title" placeholder = "제목을 입력해주세요.">
            </p>
          </div>
          <div class="from-group">
            <p>
              <label for="exampleInputEmail1">작성자<input type="text"class="form-control" size = 100 name="author" placeholder = "작성자">
            </p>
          </div>
          <div class="form-group">
            <p>
              <label for="exampleInputEmail1">본문<textarea name="description" placeholder = "내용을 작성해주세요." rows = "30" cols = "100" class = "form-control" id = "description"></textarea>
            </p>
          </div>
            <input type="submit" class = "btn btn-primary">
          </div>
        </form>
        <br>
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
