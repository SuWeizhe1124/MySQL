<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>Ch5_1_1.php</title>
<?php 
// 函數: 顯示一段文字內容
function showMsg() {  // 函數程式區塊開始
    print "<p>PHP+MySQL網頁設計課程</p>";
}  // 函數程式區塊結束
?>
</head>
<body>
<?php
for ($i = 1; $i <= 3; $i++ ) {
    showMsg(); // 呼叫函數
}
?>
</body>
</html>
