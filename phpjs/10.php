<!DOCTYPE html>
<html>
  <head>
    <meta charset ="utf-8" />
  </head>
  <body>
    <h1>JavaScript</h1>
    <script type="text/javascript">
      list =new Array("one","two","three");

      //List라는 변수에 담겨 있는 배열의 0번째 값을 의미 한다.
      document.write(list[2]+"</br>");
      document.write(list.length);
    </script>

    <h1>PHP</h1>
    <?php
      $list = array("one","two","three");
      echo $list[2]."</br>";
      echo count($list);
     ?>
  </body>
</html>
