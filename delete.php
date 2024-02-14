<?php
  require_once('config.php');
  $num = $_GET['idx'];

  $sql = "DELETE FROM bbs WHERE idx ={$num}";
  

  
  
  $result =  mysqli_query($mysqli,$sql);

  if($result == false){
    echo "<script>alert('삭제실패');history.back();</script>";
    error_log(mysqli_error($mysqli));
  }else{
    echo "<script>alert('삭제성공');location.href='./index.php';</script>";
    echo '<a href="index.php">홈</a>';
  }
?>