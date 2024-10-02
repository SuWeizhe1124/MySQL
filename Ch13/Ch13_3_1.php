<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>Ch13_3_1.php</title>
</head>
<body>
<?php
$dsn = "mysql:dbname=mybooks;host=localhost;port=3306";
$username = "root";
$password = "A12345678";
try {
   // 建立MySQL伺服器連接和開啟資料庫 
   $db = new PDO($dsn, $username, $password);
   // 指定PDO錯誤模式和錯誤處理
   $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   echo "成功建立MySQL伺服器連接和開啟資料庫"; 
} catch (PDOException $e) {
   echo "連接失敗: " . $e->getMessage();
}
$db = null;
?>
</body>
</html>
