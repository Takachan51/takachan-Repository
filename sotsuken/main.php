<?php
session_start();

// ログイン状態のチェック
if (!isset($_SESSION["USERID"])) {
	header("Location: logout.php");
	exit;
}

echo "ログインできました。" . $_SESSION["USERID"] . "さん";
?>

<!doctype html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>サンプルアプリケーション</title>
  </head>
  <body>
  <ul>
  <li><a href="logout.php">ログアウトしますか？</a></li>
  </ul>
  </body>
</html>
