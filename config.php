<?php
$mysqli = mysqli_connect('localhost', 'simplebbs', '12345', 'simplebbs');

if (mysqli_connect_error()) {
 echo "DB연결에 실패했습니다.".mysqlii_connect_error();
}

?>