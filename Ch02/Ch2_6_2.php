<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>Ch2_6_2.php</title>
</head>
<body>
<?php 
// 型態轉換運算子
$a = 17;  // 指定變數$a的值
$b = 5;   // 指定變數$b的值
// 顯示變數$a和$b的值
echo "\$a = $a : ";
echo "\$b = $b<br/>";
$c = $a / $b;  // 除法運算
echo "\$a / \$b = $c<br/>";
$c = (int) ($a / $b);  // 整數除法運算
echo "(int)(\$a / \$b) = $c<br/>";
// 將變數$a和$b型態轉換成字串
$c = (string) $a . (string) $b;
echo "(string)\$a . (string)\$b = $c<br/>";
?>
</body>
</html>
