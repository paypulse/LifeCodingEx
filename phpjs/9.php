<!DOCTYPE html>
<html>
  <head>
    <meta charset ="utf-8" />
  </head>
  <body>
    <h1>Javascript</h1>
    <ul>
      <script type="text/javascript">
      //아래와 같이 하면, 컴퓨터에 큰 누가 되니, 굳이 할 필요 없다.
      //웹브라우저는 적당한 시점에서 경고창을 띄우게 된다.
      //무한 루프
      /*  while(true)
        {
          document.write("Hello world");
        }*/
        i =0;
        while(i<10){
          //document.write("Hello world<br />");
          document.write("<li> Hello world</li>");
          i++;
        }

      </script>
    </ul>
    <h1>PHP</h1>
    <ul>
      <?php
        $i =0;
        while($i <10){
          echo "<li> Hello world </li>";
          $i = $i +1;
        }
       ?>
   </ul>
  </body>
</html>
