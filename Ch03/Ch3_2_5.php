<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>Ch3_2_5.php</title>
</head>
<body>
<?php 
$hour = 23;   // 指定小時數1~24
print "24制的時為: " . $hour. "<br/>";
// ?:條件敘述運算子, AM或PM
$str = ($hour >= 12) ? " PM" : " AM";
// ?:條件敘述運算子, 24轉12小時制
$hour = ($hour >= 12) ? $hour-12 : $hour;
print "目前時間為: " . $hour . $str;
?>
</body>
</html>
