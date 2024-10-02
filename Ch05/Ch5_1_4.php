<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>Ch5_1_4.php</title>
<?php
// 函數: 計算參數列的總和
function sum() {  // 函數沒有參數列
   $count = func_num_args();  // 取得參數個數
   echo "參數個數: $count <br/>";
   // 顯示函數傳入的參數值
   for ( $i = 0; $i < $count; $i++ ) {
      $para = func_get_arg($i);
      echo "參數$i=>$para ";
   }
   $total = 0;
   $array = func_get_args();  // 取得參數陣列
   // 計算參數的總和
   for ( $i = 0; $i < $count; $i++ )
      $total += $array[$i];
   echo "<br/>參數總和: $total<br/>";
}
?>
</head>
<body>
<?php
sum(34, 56, 23);      // 3個參數
echo "--------------------<br/>";
sum(23, 56, 90, 77);  // 4個參數
?>
</body>
</html>