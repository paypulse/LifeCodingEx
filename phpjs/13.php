<!DOCTYPE html>
<html>
  <head>
    <meta charset ="utf-8" />
  </head>
  <body>
    <h1>JavaScript</h1>
    <script type="text/javascript">
      function a(input){
        document.write(input + 1);
      }

      function b(input)
      {
         return input = input +1;
      }

/*반복문과 다르다. 이유는 반복문은 한곳에서 사용할 수 있지만.
정의된  javascript 내의 어느 부분에서도 사용 가능하다. */
      //사용자 정의 함수
      a(1);

      //write() : 입력 값을 받아서 화면에 출력해 주는 함수
      // write : 메소드
      //document : 객체
      document.write("</br>");
      document.write(b(7));

      //prompt는 빌트인 function 이다.
      prompt(a(6));
    </script>

    <h1>php</h1>
    <?php
      function a(){
        echo "Hello php function";
      }

      a();

      function b($input){
        return $input + 1;
      }

      echo b(4);

     ?>
  </body>
</html>
