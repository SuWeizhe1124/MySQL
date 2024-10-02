<?php
// 函數轉換攝氏溫度
function convertTemperature($c) {
   // 攝氏轉華氏公式
   $f = (9.0 * $c) / 5.0 + 32.0;
   return $f;
}
?>
