<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>Ch3_2_1.php</title>
</head>
<body>
<?php 
$grade = 58;   // 指定變數值
$name = "江小魚";
// if是否選條件敘述
if ( $grade < 60 ) {  // 程式區塊開始 
   // 條件成立, 執行程式區塊的程式碼 
   print $name. "成績不及格!<br/>";
   print "學生成績: " . $grade . "<br/>";
}  // 程式區塊結束
$grade = 78;
// 只有單行程式的if條件, 不用大括號
if ( $grade >= 60) 
   print $name. "成績: ". $grade . "及格!<br/>";
?>
</body>
</html>
