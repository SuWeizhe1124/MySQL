<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>Ch5_2.php</title>
<?php 
// 函數: 傳值函數交換2個參數
function swapbyValue($a, $b) {
   $tmp = $a;  // 交換參數值
   $a = $b;
   $b = $tmp;
} 
// 函數: 傳址函數文換2個參數
function swapbyRef(&$a, &$b) {
   $tmp = $a;  // 交換參數值
   $a = $b;
   $b = $tmp;
} 
?>
</head>
<body>
<table border="1">
<?php
$a = 3;  // 變數初值
$b = 5;
print "<tr><td>過程</td><td>變數\$a \$b</td></tr>";
print "<tr><td>變數初值</td><td>".$a." ".$b."</td></tr>";
print "<tr><td>呼叫swapbyValue()前為</td>";
print "<td>". $a . " " . $b. "</td></tr>";
swapbyValue($a, $b); // 呼叫傳值函數
print "<tr><td>呼叫swapbyValue()後/swapbyRef()前為</td>";
print "<td>" . $a . " ". $b. "</td></tr>";
swapbyRef($a, $b);   // 呼叫傳址函數
print "<tr><td>呼叫swapbyRef()後為</td>";
print "<td>" . $a . " ". $b. "</td></tr>";
?>
</table>
</body>
</html>
