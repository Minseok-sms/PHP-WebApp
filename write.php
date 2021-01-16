<?php
  require("config/config.php");
  require("lib/db.php");
  $conn = db_init($config["host"],$config["duser"],$config["dname"]);
  $result = mysqli_query($conn, "SELECT * FROM topic");
 ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="style.css?after">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

</head>
<body id = "change">
    <div class="container-fluid">
      <header class = "jumbotron text-center">
          <img src="moon.jpg" alt="moon" height = "75" width = "100" class = "rounded">
          <h1><a href="/index.php">JavaScript</a></h1>

      </header>
    </div>

    <div class="row">
      <nav class ="col-md-3">
          <ol class= "nav flex-column">
            <?php
              while($row = mysqli_fetch_assoc($result)){
                echo '<li class="nav-item"><a class="nav-link" href="/index.php?id='.$row['id'].'">'.htmlspecialchars($row['title']).'</a><li>'."\n";

            }
            #echo '<li><a href = "http://localhost/write1.php">글쓰기</a></li>';
             ?>
          </ol>
      </nav>
      <div class="col-md-9">
        <article>
          <form action="rev.php" method="post">
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
        </article>
        <hr>
        <div id = "control">
          <div class="btn-group" role="group" aria-label="Basic example">
            <input type="button"class="btn btn-primary" value = "white" onclick = "document.getElementById('change').className = 'white'"/>
            <input type="button"class="btn btn-secondary" value = "black" onclick = "document.getElementById('change').className = 'black'"/>
            <a href="/write.php" class="btn btn-success"> 쓰기</a>
          </div>
        </div>
      </div>
    </div>


    <!--Start of Tawk.to Script-->
    <script type="text/javascript">
      var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
      (function(){
      var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
      s1.async=true;
      s1.src='https://embed.tawk.to/5fe9e72cdf060f156a9122e6/1eqkqu22j';
      s1.charset='UTF-8';
      s1.setAttribute('crossorigin','*');
      s0.parentNode.insertBefore(s1,s0);
      })();
    </script>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
<!--End of Tawk.to Script-->
</body>
</html>
