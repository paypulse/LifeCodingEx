<?php
  $conn=mysqli_connect("localhost","root",'bg2759');
  //DB 선택
  mysqli_select_db($conn,'opentutorials');
  $sql = "INSERT INTO topic (title,description,author,created) VALUES('".$_POST['title']."', '".$_POST['description']."', '".$_POST['author']."', now())";
  //DB 조회
  $result =mysqli_query($conn,$sql);

  //redirection 되는 부분
  header('Location: http://localhost/LifeCoding/write.php');
  
 ?>
