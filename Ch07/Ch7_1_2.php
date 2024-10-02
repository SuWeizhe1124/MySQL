<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>Ch7_1_2.php</title>
</head>
<body>
<?php
header("Refresh: 2");
// header("Refresh:2;url=Ch7_3.php");
$value = rand (1, 100);  // 取得亂數值
echo "更新的亂數值: ". $value. "<br/>";
?>
</body>
</html>
