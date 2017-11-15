<?php
  $conn=mysqli_connect("localhost","root",'bg2759');
  //DB 선택
  mysqli_select_db($conn,'opentutorials');
  $sql = "select * from user where name='".$_POST['author']."'";
  $result= mysqli_query($conn, $sql);
  //var_dump($result); //$result 안의 값은 object이다.
  //위의 함수 결과 : object(mysqli_result)#2 (5) { ["current_field"]=> int(0) ["field_count"]=> int(3) ["lengths"]=> NULL ["num_rows"]=> int(1) ["type"]=> int(0) }
  echo $result ->num_rows;
  if($result->num_rows ==0){
    //사용자가 존재 하지 않는다면, 사용자를 추가하는 부분을 추가
    $sql ="insert into user(name,password) values('".$_POST['author']."','11111')";
    //데이터를 추가
    mysqli_query($conn, $sql);

    //db에 추가한 정보의 id를 알아 낼 수 있는 방법
    $user_id =mysqli_insert_id($conn);


  }else{
    $row = mysqli_fetch_assoc($result);
    //변수에 들어간 입력 값에 대한 정보를 상세히 보여주는 php 내장 함수
    $user_id =$row['id'];

  }

  //exit 명령을 만나면 완전히 종료 한다는 의미
  $sql = "INSERT INTO topic (title,description,author,created) VALUES('".$_POST['title']."', '".$_POST['description']."', '".$user_id."', now())";
  //DB 조회
  $result =mysqli_query($conn,$sql);
  //redirection 되는 부분
  header('Location: http://localhost/LifeCoding/write.php');

 ?>
