<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>Ch3_4_1.php</title>
</head>
<body>
<?php 
$a = 3;  // 指定變數值
$b = 5;
$c = 2;
// 顯示變數值
print "\$a = " . $a . "<br/>";
print "\$b = " . $b . "<br/>";
print "\$c = " . $c . "<br/>";
// if/else巢狀條件敘述
if ( $a > $b && $a > $c ) {  // 外層條件敘述
    print("變數 \$a 最大!<br\>");
}
else {
    if ( $b > $c ) {  // 內層條件敘述
        print("變數 \$b 最大!<br/>");
    } else {
            print("變數 \$c 最大!<br/>");
    }
}
?>
</body>
</html>
