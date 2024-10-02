<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>Ch12_1_2.php</title>
</head>
<body>
<?php
// 建立MySQL伺服器連接 
$db = mysqli_connect("localhost", "root", "A12345678") 
        or die("無法開啟MySQL伺服器連接!<br/>");
// 指定開啟的資料庫名稱mybooks
$dbname = "mybooks";
// 開啟指定的資料庫
if ( !mysqli_select_db($db, $dbname) )
   die("無法開啟 $dbname 資料庫!<br/>");
else
   echo "資料庫: $dbname 開啟成功!<br/>";
// 指定開啟的資料庫名稱mysql
$dbname = "mysql";
// 開啟指定的資料庫
if ( !mysqli_select_db($db, $dbname) ) 
   die("無法開啟 $dbname 資料庫!<br/>");
else
   echo "資料庫: $dbname 開啟成功!<br/>";
mysqli_close($db);   // 關閉伺服器連接
?>
</body>
</html>
