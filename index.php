<?php
  //DB 접속
  $conn=mysqli_connect("localhost","root",bg2759);

  //DB 선택
  mysqli_select_db($conn,'opentutorials');

  //DB 조회
  mysqli_query($conn,'SELECT*FROM topic');

  //결과 출력
  

 ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="http://localhost/LifeCoding/css/style.css">
  </head>
  <body id="target">
    <header>
      <img src="https://s3.ap-northeast-2.amazonaws.com/opentutorials-user-file/course/94.png" alt="생활 코딩">
      <h1> <a href="http://localhost/LifeCoding/index.php">Java Script</a></h1>
    </header>
    <nav>
      <ol>
        <?php
            echo file_get_contents("list.txt");
        ?>
      </ol>
    </nav>
    <div id="control">
      <input type="button" value="white" onclick="document.getElementById('target').className='white'"/>
      <input type="button" value="black" onclick="document.getElementById('target').className='black'"/>
    </div>
    <article>
      <?php

        if(empty($_GET['id'])==false){
          echo file_get_contents($_GET['id'].".txt");
        }
       ?>
    </article>
  </body>
</html>
