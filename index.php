<?php
  require_once('config.php');

  //목록을 조회하는 방법
  $sql = "SELECT * FROM bbs";
  $result =  mysqli_query($mysqli,$sql); // 

  // print_r(mysqli_fetch_row($result)); // Array ( [0] => 14 [1] => 홍길동 [2] => 안녕하세요 )
  
  /*
    while ($row = mysqli_fetch_row($result)) {  // 홍길동홍길동홍길동
    printf($row[1]);
    }
  */

  // print_r(mysqli_fetch_assoc($result));  // Array ( [idx] => 14 [username] => 홍길동 [usermsg] => 안녕하세요 )
  
  /*
    while($row = mysqli_fetch_assoc($result)){
    printf($row['username']);
    }
  */
  
  // print_r(mysqli_fetch_array($result));  // Array ( [0] => 14 [idx] => 14 [1] => 홍길동 [username] => 홍길동 [2] => 안녕하세요 [usermsg] => 안녕하세요 )
 
  /* while($row = mysqli_fetch_array($result)){  //14홍길동15홍길동16홍길동
    printf($row[0]);
    printf($row['username']);
    }
  */
  // print_r(mysqli_fetch_object($result));  // stdClass Object ( [idx] => 14 [username] => 홍길동 [usermsg] => 안녕하세요 )
    
    $list = '';
    while($row = mysqli_fetch_object($result)){   //
      
      // printf($row->username); //홍길동홍길동홍길동
      $list = $list."<li><a href=\"view.php?idx={$row->idx}\">{$row->username}</a></li>";
    }
  
?>
<!DOCTYPE html>
<html lang="ko">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Home - Simple BBS</title>
</head>
<body>
  <h1>Simple BBS</h1>
  <ul>
    <!-- <li><a href="">글 제목1</a><a href="">수정</a>/<a href="">삭제</a></li> -->
    <?= $list;?>
</ul>
<p>
  <a href="write.php">글쓰기</a>
</p>
<hr>
<form action="search.php">
  <input type="search" name="keyword">
  <button>검색</button>
</form>
</body>
</html>