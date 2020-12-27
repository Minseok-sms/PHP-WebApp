<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
  </head>
  <body>
    <h1>javascript</h1>
    <ul>
    <script>
        list = new Array("h", "a", "p", "p", "y");
        i = 0;
        while(i < list.length){
          document.write("<li>" + list[i] + "</li>");
          i++;
        }
    </script>
    </ul>
    <h2>php</h2>
    <ul>
      <?php
        $list = array("h", "e", "l", "l", "o");
        $i = 0;
        while($i < count($list)){
          echo "<li>".$list[$i]."</li>";
          $i++;
        }
       ?>
    </ul>
  </body>
</html>
