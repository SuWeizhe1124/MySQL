<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>顯示訪客留言</title>
</head>
<body>
<h2>顯示訪客留言</h2><hr/>
<?php
$file = "guestbook.txt";
if ( !file_exists($file) or filesize($file) == 0 )
   echo "<h2>目前沒有任何留言！</h2><hr>";
else
   readfile($file);  // 讀取和顯示所有留言
?>
| <a href="index.php">新增留言</a> |
</body>
</html>