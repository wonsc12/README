<?php
$mysqli = mysqli_connect('localhost', 'simplebbs', '12345', 'simplebbs');

if (mysqli_connect_errno()) {
 echo "DB연결에 실패했습니다.".mysqlii_connect_error();
}else{
  echo "DB연결 성공";
}
?>