<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
  </head>
  <body>
    <h1>JavaScript</h1>
    <script>
      function a(){
        document.write("hello js function <br/>");
      }
      function b(input){
        return input + 1;
      }
      a();
      document.write(b(7));

    </script>
    <h1>PHP</h1>
    <?php
      function a(){
        echo "Hello php function <br/>";
      }
      function b($input){
        return $input + 1;
      }
      a();
      echo b(7);
     ?>
  </body>
</html>
