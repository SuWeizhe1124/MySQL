<?php 
$value = rand (1, 3);  // 取得亂數值
// 轉址到其他網頁或URL網址
switch($value) {
   case 1:
      header("Location: Ch7_2_1.php");
      break;
   case 2:
      header("Location: Ch7_3.php");
      break;
   case 3:
      header("Location: http://www.hinet.net");
      break;
}
exit();
?>
