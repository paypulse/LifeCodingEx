<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
        //echo file_get_contents("1.txt");
        //if id의 값에 따라서 달라지게 한다면,
        echo file_get_contents($_GET['id'].".txt");
    ?>
  </body>
</html>
