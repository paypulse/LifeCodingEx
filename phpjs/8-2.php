<!DOCTYPE html>
<html>
  <head>
    <meta charset ="utf-8" />
  </head>
  <body>
    <?php
    //$_GET["password"]; php 문법에 해당
      $password = $_GET["password"];
      if($password == "1111")
      {
        echo "안녕하세요";
      }else{
        echo "뉘신지";
      }
     ?>

  </body>
</html>
