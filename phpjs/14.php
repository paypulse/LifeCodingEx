<?php
$conn = mysqli_connect("localhost","root","bg2759");
mysqli_select_db($conn,"opentutorials");
//아래 함수의 인자로 전달하면, 입력 값은 특수한 기호가 있는 정보가 포함되어 있다면,
//sql서버는 \ 기호를 sql의 특수가 아닌 문자로 처리 한다.

$name = mysqli_real_escape_string($conn, $_GET['name']);
$password = mysqli_real_escape_string($conn, $_GET['password']);
$sql ="SELECT * FROM user WHERE name='".$name."' AND
 password='".$password."'";
echo $sql;
$result = mysqli_query($conn, $sql);
//var_dump($result->num_rows);
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset ="utf-8" />
  </head>
  <body>
    <?php
    //$_GET["password"]; php 문법에 해당
      $password = $_GET["password"];
      //if($password == "1111")
      if($result->num_rows == "1")
      {
        echo "안녕하세요, 주인 님";
      }else{
        echo "뉘신지?";
      }
     ?>

  </body>
</html>
