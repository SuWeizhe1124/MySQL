<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>Ch4_2_1.php</title>
</head>
<body>
<?php
// 建立PHP陣列
$animals[] = "狗";
$animals[] = "貓";
$animals[] = "長頸鹿";
// 使用array()建立陣列
$grades = array(78, 55, 89, 93);
print_r($animals); // 顯示名稱清單
echo "<br/>";      // 換行
var_dump($grades);  // 顯示成績資料
?>
</body>
</html>
