<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>Ch5_1_3.php</title>
<?php 
// 函數: 計算立方體體積
function cube($length, $width=3, $height=5) {
   print $length."x".$width."x".$height."= ";
   return $length * $width * $height; // 計算體積
}
?>
</head>
<body>
<?php
// 指定變數值
$l = 10;   $w = 12;   $h = 15; 
// 呼叫cube()函數計算立方體體積 
print "盒子體積: ".cube($l, $w, $h)."<br/>"; // 3個參數
print "盒子體積: ".cube($l, $w)."<br/>";     // 2個參數
print "盒子體積: ".cube($l)."<br/>";         // 1個參數
?>
</body>
</html>
