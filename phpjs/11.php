<!DOCTYPE html>
<html>
  <head>
    <meta charset ="utf-8" />
  </head>
  <body>
    <h1>JavaScript</h1>
    <script type="text/javascript">
      list = new Array("최진혁","최유빈","신복구");
      i=0;
      while(i<list.length)
      {
        document.write(list[i]+"</br>");
        i++;
      }
    </script>

    <h1>PHP</h1>
    <?php
      $list = array("최진혁","아이유","신복구");
      $i =0;
      while($i <count($list))
      {
        echo $list[$i]."</br>";
        $i = $i +1;
      }
     ?>
  </body>
</html>
