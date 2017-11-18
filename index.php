<?php
  require("config/config.php");
  require("lib/db.php");
  $conn=db_init($config["host"],$config["duser"],$config["dpw"],$config["dname"]);
  //DB 조회
  $result =mysqli_query($conn,'SELECT*FROM topic');
  
  //결과 출력
//  $row = mysqli_fetch_assoc($result);
/*  echo $row['id'];
  echo $row['title'];
  echo "<br/>";
*/
//연관 배열의 형식으로 2번째 행의 값을 가져 온다.

/*  $row = mysqli_fetch_assoc($result);

  echo $row['id'];
  echo $row['title'];
*/
  //입력 값으로 들어온 데이터가 무엇인지를 정확하게 알려주는 내장 함수
  //php에서 null의 의미는 false에 해당한다.
  //var_dump($row);
  /*반복 되는 코드를 반복문을 사용해서 골격을 작성 하자. */
/*
  while($row=mysqli_fetch_assoc($result)){
    echo $row['id'];
    echo $row['title'];
    echo "<br/>";
  }
*/
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
          /*
            echo file_get_contents("list.txt");
            */
            //DB와 연동
            while($row=mysqli_fetch_assoc($result)){
              echo '<li><a href="http://localhost/LifeCoding/index.php?id='.$row['id'].'">'.htmlspecialchars($row['title']).'</a></li>'."\n";


            }
        ?>
      </ol>
    </nav>
    <div id="control">
      <input type="button" value="white" onclick="document.getElementById('target').className='white'"/>
      <input type="button" value="black" onclick="document.getElementById('target').className='black'"/>
      <a href="http://localhost/LifeCoding/write.php">쓰기</a>
    </div>
    <article>
      <?php
      /*
        if(empty($_GET['id'])==false){
          echo file_get_contents($_GET['id'].".txt");
        }*/
        if(empty($_GET['id'])===false){
          $sql ="select topic.id,title,name,description from topic left join user on topic.author = user.id where topic.id=".$_GET['id'];
          //$sql ="SELECT * FROM topic WHERE id= ".$_GET['id'];
          $result=mysqli_query($conn, $sql);
          $row = mysqli_fetch_assoc($result);
          echo '<h2>'.htmlspecialchars($row['title']).'</h2>';
          //author에 대한 정보
          echo '<p>'.htmlspecialchars($row['name']).'</p>';
          echo strip_tags($row['description'], '<a><h1><h2><h3><h4><h5><ul><ol><li>');

        }

       ?>
    </article>
  </body>
</html>
