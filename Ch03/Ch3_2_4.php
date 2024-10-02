<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>Ch3_2_4.php</title>
</head>
<body>
<?php 
$grade = 'C';   // 指定變數值
// 顯示變數值
print "GPA成績: " . $grade. "<br/>";
// switch多選一條件敘述
switch ( $grade ) { // 判斷條件是==等於
   case 'A':    // 等於A
      print "學生成績超過80";
      break;
   case 'B':    // 等於B
      print "學生成績超過70,低於80";
      break;
   case 'C':    // 等於C
      print "學生成績超過60,低於70";
      break;
   default:     // 沒有符合條件
      print "學生成績不及格";
}
?>
</body>
</html>
