<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>Ch5_1_4a.php</title>
<?php
// 函數: 計算參數列的總和
function sum(int ...$array) {  
   $count = count($array);  // 取得參數個數
   echo "參數個數: $count <br/>";
   // 顯示函數傳入的參數值, 且計算參數的總和
   $total = 0;
   for ( $i = 0; $i < $count; $i++ ) {
      echo "參數$i=>$array[$i] ";
      $total += $array[$i];
   }  
   echo "<br/>參數總和: $total<br/>";
}
?>
</head>
<body>
<?php
sum(34, "56", 23);      // 3個參數
echo "--------------------<br/>";
sum(23, 56, "90", 77);  // 4個參數
?>
</body>
</html>