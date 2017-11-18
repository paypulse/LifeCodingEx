<?php
//DB 접속
//$conn=mysqli_connect("localhost","root",'bg2759');
//DB 선택
//mysqli_select_db($conn,'opentutorials');
  //위의 두줄을 library로 만들기
  function db_init($host, $duser,$dpw,$dname){
    $conn=mysqli_connect($host,$duser,$dpw);
    mysqli_select_db($conn,$dname);
    return $conn;
  }

 ?>
