<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>Ch3_2_3.php</title>
</head>
<body>
<?php 
$grade = 65;   // 指定變數值
// 顯示變數值
print "成績: " . $grade. "<br/>";
// if/elseif多選一條件敘述
if ( $grade >= 80 )  // 成立
   print "學生GPA成績: A<br/>";
elseif ( $grade >= 70 )  // 不成立, 再次判斷
       print "學生GPA成績: B<br/>";
    elseif ( $grade >= 60 ) // 不成立, 再次判斷
       print "學生GPA成績: C<br/>";
    else
       print "學生GPA成績: D<br/>";
?>
</body>
</html>