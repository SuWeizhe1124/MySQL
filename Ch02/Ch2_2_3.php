<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>Ch2_2_3.php</title>
</head>
<body>
<?php 
$name = "陳會安"; // 建立字串變數
$user1 = "陳允傑";
$user2 = "江小魚";
// echo()顯示內容
echo("測試echo()的使用<br/>");
echo "測試echo()的使用<br/>";
echo $user1,$user2;   // 顯示2個變數值
// 使用字串連接運算子來輸出$name變數值
echo "Hi! " . $name . "<br/>"; 
// 使用字串連接運算子來輸出$name和$user1的變數值
echo("Hi! " . $name . " " . $user1 . "<br/>");
// 輸出3個變數值, 變數是直接置於字串中
echo "Hi! $name  $user1  $user2<br/>"; 
echo("Hi! $name<br/>");  // 輸出變數$name的值
// 改用print()顯示變數值的內容
print("測試print()的使用<br/>");
print "測試print()的使用<br/>";
print "Hi! " . $name . "<br/>";
print("Hi! " . $name . " " . $user1 . "<br/>");
print "Hi! $name $user1 $user2<br/>";
print("Hi! $name<br/>");
?>
</body>
</html>

