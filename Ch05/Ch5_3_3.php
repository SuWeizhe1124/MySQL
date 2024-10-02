<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>Ch5_3_3.php</title>
</head>
<body>
<?php
// 建立匿名函數
$name = function($username) {
    printf("使用者名稱: " . $username . "<br/>");
};
$name("陳會安");  // 呼叫函數
$name("江小魚");  // 呼叫函數
?>
</body>
</html>
