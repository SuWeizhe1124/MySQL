<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>Ch4_2_2.php</title>
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
// 計算成績總分
$total = $grades[0] + $grades[1] + $grades[2] + $grades[3];
$animals[] = "老鼠";  // 新增陣列元素
print_r($animals); // 顯示名稱清單
echo "<br/>";      // 換行
print_r($grades);  // 顯示成績資料
// 顯示成績總分
print "<br/>成績總分: " . $total . "<br/>";
?>
</body>
</html>
