<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>Ch5_3_2.php</title>
<?php 
// 函數: 沒有使用靜態變數
function nonStaticVar() {
   $step = 0;
   $step++;   // 區域變數加一
   return $step;
}
// 函數: 使用靜態變數 
function staticVar() {
   static $step = 0;
   $step++;   // 靜態變數加一
   return $step;
}
?>
</head>
<body>
<?php
$v1 = nonStaticVar();  // 函數呼叫
$v2 = nonStaticVar();
$v3 = nonStaticVar();
print "不使用靜態: $v1, $v2, $v3<br/>";
$v1 = staticVar();     // 函數呼叫
$v2 = staticVar();
$v3 = staticVar();
print "使用靜態: $v1, $v2, $v3<br/>"; 
?>
</body>
</html>
