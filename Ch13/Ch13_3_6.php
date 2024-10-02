<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>Ch13_3_6.php</title>
</head>
<body>
<?php
$dsn = "mysql:dbname=mybooks;host=localhost;port=3306";
$username = "root";
$password = "A12345678";
try {
   // 建立MySQL伺服器連接和開啟資料庫 
   $db = new PDO($dsn, "root", "A12345678");
   // 指定PDO錯誤模式和錯誤處理
   $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   $sql1 = "UPDATE books SET price=550 WHERE id='P0002'";
   $sql2 = "UPDATE books SET price=550 WHERE id='W0002'";
   $db->beginTransaction();   // 開始交易
   // 執行2個更新的SQL指令
   $db->exec($sql1);
   $db->exec($sql2);
   // 認可交易
   $db->commit();
   echo "成功更新2筆圖書的書價...";
} catch (PDOException $e) {
   $db->rollBack();
   echo "連接失敗: " . $e->getMessage();
}
$db = null;
?>
</body>
</html>
