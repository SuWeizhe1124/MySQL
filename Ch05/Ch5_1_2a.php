<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>Ch5_1_2a.php</title>
<?php 
// 函數: 計算N加到N的總和
function sumN2N(int $begin, int $end) : int {
   $sum = 0;
   // 計算加總的for迴圈
   for ($i = $begin; $i <= $end; $i++) {
      $sum += $i;
   } 
   return $sum;   // 傳回函數的計算結果
} 
?>
</head>
<body>
<?php
$sum1 = sumN2N(1, 100); // 呼叫函數, 傳入不同參數值
$sum2 = sumN2N(1, 10);  // 呼叫函數, 傳入不同參數值
?>
<p>從1加到100為: <?php echo $sum1 ?></p>
<p>從1加到 10為: <?php echo $sum2 ?></p>
</body>
</html>
