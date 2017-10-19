<!DOCTYPE html>
<html>
  <head>
    <meta charset ="utf-8" />
  </head>
  <body>
    <h1>Javascript</h1>
    <script type="text/javascript">
      document.writeln(10+10);
      //문자와 문자를 더했기에 1010이 된다.
      document.writeln("10"+"10");
    </script>

    <h1>PHP</h1>
    <?php
        echo 10 +10;
        //문자 10인데, + : 연산자. 숫자를 더할때 사용하는 연산자로
        //고정적이기에 php 는 자동으로 문자를 숫자로 바꿔서 계산
        echo "10" + "10";
        //문자와 문자를 사용하고 싶다면
        echo "10"."10";
        
     ?>
  </body>
</html>
