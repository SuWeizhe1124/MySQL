<?php
session_start();  // 啟用交談期    
$myname = $_SESSION["myName"];  // 取得Sesson變數值
session_destroy();  // 關閉交談期
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>Ch7_4_2a.php</title>
</head>
<body>
<p>Session值: <?php echo $myname ?></p>
</body>
</html>
