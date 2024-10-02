<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>Ch2_3_1.php</title>
</head>
<body>
<?php 
// 變數與指定敘述
$name  = "陳會安";  // 建立字串變數
$age = 35;          // 建立整數變數
// 顯示變數的內容
print "學生姓名: " . $name . "<br/>";
print "學生年齡: " . $age . "<br/>";
$age = "20";        // 改指定成字串值
$nickname = $name;  // 指定成$name變數值
// 顯示變數的內容
print "學生別名: " . $nickname . "<br/>";
print "學生年齡: " . $age . "<br/>";
?>
</body>
</html>

