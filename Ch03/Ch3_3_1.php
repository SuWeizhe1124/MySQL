<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>Ch3_3_1.php</title>
</head>
<body>
<?php 
$total = 0;   // 指定變數值
// for遞增迴圈, 計數器變數值是從小至大
for ( $i = 6; $i <= 15; $i++ ) {
   print "|". $i;
   $total += $i;   // 執行加總
}
print "|<br>for遞增迴圈從6加到15=".$total."<br/>";
$total = 0;   // 重設變數值
// for遞減迴圈, 計數器變數值是從大至小
for ( $i = 50; $i >= 10; $i-- ) $total += $i;
print "for遞減迴圈從50加到10=".$total."<br/>";
?>
</body>
</html>
