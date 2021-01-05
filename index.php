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
    <link rel="stylesheet" href="style.css?before">
</head>
<body id = "change">
    <header>
        <img src="moon.jpg" alt="moon" height = "75" width = "100">
        <h1><a href="http://localhost/index.php">JavaScript</a></h1>
    </header>
    <nav>
        <ol>
          <?php
            while($row = mysqli_fetch_assoc($result)){
              echo '<li><a href="http://localhost/index.php?id='.$row['id'].'">'.htmlspecialchars($row['title']).'</a><li>'."\n";

          }
          #echo '<li><a href = "http://localhost/write1.php">글쓰기</a></li>';
           ?>
        </ol>
    </nav>
    <div id = "control">
      <input type="button" value = "white" onclick = "document.getElementById('change').className = 'white'"/>
      <input type="button" value = "black" onclick = "document.getElementById('change').className = 'black'"/>
      <a href="http://localhost/write.php"> 쓰기</a>
    </div>
    <article>
      <?php
        #if(empty($_GET['id']) == false)
          #echo file_get_contents($_GET['id'].".txt");
        if(empty($_GET['id']) == false){
          #$sql = 'SELECT * FROM topic WHERE id ='.$_GET['id'];
          $sql = "SELECT topic.id,title,name,description FROM topic LEFT JOIN user ON topic.author = user.id WHERE topic.id = ".$_GET['id'];

          $result = mysqli_query($conn, $sql);
          $row = mysqli_fetch_assoc($result);
          echo '<h2>'.htmlspecialchars($row['title']).'</h2>';
          echo '<p>'.htmlspecialchars($row['name']).'</p>';
          echo strip_tags($row['description'],'<a><h1><h2><h3><li><ol>');
        }

       ?>
    </article>

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

<!--End of Tawk.to Script-->
</body>
</html>
