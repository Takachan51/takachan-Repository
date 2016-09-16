<?php
try {
	$pdo = new PDO('mysql:host=150.89.234.16;dbname=middle_manager;charset=utf8','user','user',
			array(PDO::ATTR_EMULATE_PREPARES => false));

}catch (PDOException $e) {
	exit('データベース接続失敗。'.$e->getMessage());
}
print "接続成功<br>"
?>