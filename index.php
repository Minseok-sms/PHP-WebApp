<?php
  $conn = mysqli_connect("localhost:3307","root","111111");
  mysqli_select_db($conn, "opentutorials");
  $result = mysqli_query($conn, "SELECT * FROM topic");
  $row = mysqli_fetch_assoc($result);
  echo $row['id'];
 ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="http://localhost/style.css">
</head>
<body id = "change">
    <header>
        <img src="moon.jpg" alt="moon" height = "75" width = "100">
        <h1><a href="http://localhost/index.php">JavaScript</a></h1>
    </header>
    <nav>
        <ol>
          <?php
            echo file_get_contents("list.txt");
           ?>
        </ol>
    </nav>
    <div id = "control">
      <input type="button" value = "white" onclick = "document.getElementById('change').className = 'white'"/>
      <input type="button" value = "black" onclick = "document.getElementById('change').className = 'black'"/>
    </div>
    <article>
      <?php
      if(empty($_GET['id']) == false)
        echo file_get_contents($_GET['id'].".txt");
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
