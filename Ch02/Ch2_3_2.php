<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>Ch2_3_2.php</title>
</head>
<body>
<?php 
$user = &$name;      // 參考變數$name
$user = "江小魚";    // 即指定變數name的值
// 顯示變數的內容
print "學生姓名: " . $name . "<br/>";
print "使用者名稱: " . $user . "<br/>";
$myname = "username";  // 指定變數$myname的值
$$myname = "陳允傑";   // 指定變數$username的值
$username1 = $$myname;  // 取出動態變數的值
$username2 = ${$myname};// 取出動態變數的值
// 顯示變數的內容
echo "變數\$myname = $myname<br/>";
echo "變數$$myname = $username<br/>";
// 取得變數$username的值
echo "變數$$myname = ${$myname}<br/>";
echo "變數\$username1 = $username1<br/>";
echo "變數\$username2 = $username2<br/>";
?>
</body>
</html>
