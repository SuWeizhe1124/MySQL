<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>Ch4_2_3.php</title>
</head>
<body>
<?php
// 建立PHP陣列
$animals[] = "狗";
$animals[] = "貓";
$animals[] = "長頸鹿";
// 使用array()建立陣列
$grades = array(78, 55, 89, 93);
$grades[2] = 65;  // 更改陣列值
$total = 0;
// 使用for迴圈計算成績總分
for ( $i = 0; $i < count($grades); $i++ ) {
   echo "$i=>$grades[$i] ";
   $total += $grades[$i];  // 計算總分
}
echo "<br/>成績總分: ".$total."分<br/>";
$animals[] = "老鼠";  // 新增陣列元素
// 顯示名稱清單 - 使用foreach迴圈
foreach ($animals as $element) {
   echo "$element ";
}
echo "<br/>";
?>
</body>
</html>
