<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>Ch1_4_3.php</title>
</head>
<body>
<?php
// 指定變數初值
$begin = 12;
$end = 18;
// 設定字型尺寸由小變大
for ($i = $begin; $i <= $end; $i += 3) {
?>
<p style="font-size:<?php echo $i;?>pt">
我的PHP程式
<?php
print "</p>";
} ?>
</body>
</html>

