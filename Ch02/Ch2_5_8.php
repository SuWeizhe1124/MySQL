<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>Ch2_5_8.php</title>
</head>
<body>
<?php 
// 指定變數值
$x = 5;
$y = 0;
$a = @($x / $y); // 測試的錯誤程式碼
$b = ($x / $y);  // 測試的錯誤程式碼
?>
</body>
</html>
