<?php
header("Refresh:1;url=shoppingcart.php");
// 取得URL參數
$id = $_GET["Id"]; // 取得Cookie名稱
// 檢查Cookie是否存在
if (isset($_COOKIE[$id])) {
   // 存在, 刪除Cookie
   while (list($name, $value) = each($_COOKIE[$id]))
      setcookie($id."[".$name."]", "", time()-3600); 
}
?>