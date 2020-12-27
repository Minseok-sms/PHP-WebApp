<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
  </head>
  <body>
    <h1>JavaScript</h1>
    <script>
      list = new Array("one", "two", "three");
      i = 0;
      while(i < 3){
        document.write(list[i]);
        document.write(list.length);
        i++;
      }
    </script>
    <h1>php</h1>
    <?php
      $list = array("one", "two", "three");
      $i = 0;
      while($i < 3){
        echo $list[$i];
        $i++;
      }
     ?>
  </body>
</html>
