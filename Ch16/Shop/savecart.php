<?php 
$msg = "";
// 取得表單欄位
$id = $_POST["BookID"];
$title = $_POST["BookTitle"];
$price = $_POST["BookPrice"];
$quantity = $_POST["Quantity"];
if ($quantity == "") $quantity = 1;
// 儲存訂購的商品資料
setcookie($id."[ID]", $id, time()+3600);
setcookie($id."[Title]", $title, time()+3600);
setcookie($id."[Price]", $price, time()+3600);
setcookie($id."[Quantity]", $quantity, time()+3600);
$msg = "已經成功將選購商品放入購物車!<br/>";
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>將商品放入購物車</title>
</head>
<body>
<h2>將商品放入購物車</h2><hr/>
<p><?php echo $msg ?></p>
<hr/>| <a href="index.php">網路商店</a>
| <a href="shoppingcart.php">檢視購物車內容</a> |
</body>
</html>