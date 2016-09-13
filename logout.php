<?php
session_start();

if (isset($_SESSION["USERID"])) {
	$errorMessage = "ログアウトしました。";
}
else {
	$errorMessage = "セッションがタイムアウトしました。";
}
// セッション変数のクリア
$_SESSION = array();

// セッションクリア
@session_destroy();
?>

<!doctype html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>サンプルアプリケーション</title>
  </head>
  <body>
  <div><?php echo $errorMessage; ?></div>
  <ul>
  <li><a href="login.php">ログイン画面に戻る</a></li>
  </ul>
  </body>
</html>