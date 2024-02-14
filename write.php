<!DOCTYPE html>
<html lang="ko">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Write - Simple BBS</title>
</head>
<body>
  <h1>글쓰기</h1>
  <form action="insert.php" method="POST">
    <p>
      <label for="username">이름:</label>
      <input type="text" id="username" name="username" require>
    </p>
    <p>
      <label for="usermsg">메시지"</label>
      <textarea id="usermsg" name="usermsg" cols="30" rows="usermsg"></textarea>
    </p>
    <button>전송</button>
  </form>
  <hr>
  <p>
    <a href="index.php">홈으로</a>
  </p>
</body>
</html>