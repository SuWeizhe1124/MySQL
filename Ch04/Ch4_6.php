<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>Ch4_6.php</title>
</head>
<body>
<?php
// 建立PHP陣列
$animals[0] = "狗";
$animals[1] = "貓";
$animals[2] = "長頸鹿";
$animals[3] = "魚";
$animals[4] = "老鼠";
// 使用array()建立陣列
$grades = array(78, 55, 89, 93);
print_r($animals); // 顯示名稱清單
echo "<br/>";      // 換行
print_r($grades);  // 顯示成績資料
echo "<br/>";      // 換行
// 搜尋陣列元素
$key1 = array_search('魚', $animals);  
print "搜尋[魚] =  " . $key1 . "<br/>"; 
$key2 = array_search('狗', $animals);  
print "搜尋[狗] =  " . $key2 . "<br/>"; 
// 排序陣列元素
sort($grades);  // 由小到大
foreach ($grades as $key => $val) {
    echo "\$grades[" . $key . "] = " . $val . "<br/>";
}
?>
</body>
</html>