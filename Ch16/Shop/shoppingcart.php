<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>購物車</title>
</head>
<body>
<h2>選購的商品</h2><hr/>
<table border="1">
<tr>
   <th>操作</th><th>商品編號</th><th>商品名稱</th>
   <th>訂價</th><th>訂購數量</th>
</tr>
<?php
$total = 0;
// 取出所有的Cookie
while (list($array, $value) = each($_COOKIE)) {
  // 檢查COOKIE名稱是否存在，且內容為陣列
  if (isset($_COOKIE[$array]) && is_array($_COOKIE[$array])) {
     echo "<tr><td>";
     echo "<a href='delete.php?Id=".$array."'>刪除</a></td>";
     $price = 0;
     $quantity = 0;
     // 顯示選購的商品資料
     while (list($name, $value) = each($_COOKIE[$array])) {
        // 使用表格顯示
        echo "<td>".$value."</td>";
        if ($name == "Price")  $price = $value;
        if ($name == "Quantity") $quantity = $value;
     }
     $total += $price * $quantity;
     echo "</tr>";
  }
}
if ($total != 0) {
   echo "<tr><td colspan=5>";
   echo "訂購總金額 = NT$".$total."元</td></tr>";
}
?>
</table>
<hr/> | <a href="index.php">網路商店</a>
| <a href="shoppingcart.php">檢視購物車內容</a> |
</center>
</body>
</html>