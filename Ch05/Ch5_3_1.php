<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>Ch5_3_1.php</title>
<?php 
// 函數: 計算參數平方
function square($a = 2) {
   return $a * $a;  // 計算參數平方
} 
?>
</head>
<body>
<?php
// 指定變數值
$x = 4;
$func = "square";   // 指定函數名稱的變數值
echo "預設平方值: ".$func()."<br/>";  // 呼叫函數
echo "\$x平方值: ".$func($x)."<br/>"; // 呼叫函數傳入參數
?>
</body>
</html>