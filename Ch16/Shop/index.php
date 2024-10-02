<?php
// 建立MySQL資料庫連結
$db = mysqli_connect("localhost","root","A12345678");
mysqli_select_db($db, "mybooks"); // 選擇資料庫
$sql = "SELECT * FROM books";
$rows = mysqli_query($db, $sql); // 執行SQL查詢
$num = mysqli_num_rows($rows); // 取得記錄數
mysqli_close($db); // 關閉伺服器連接
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>網路商店商品目錄</title>
</head>
<body>
<h2>網路商店商品目錄</h2><hr/>
<table border="1">
<tr>
   <th>編號</th><th>圖書名稱</th>
   <th>價格</th><th>數量</th><th>訂購</th>
</tr>
<?php
if ($num > 0) {
   // 顯示資料庫內容
   while ($row = mysqli_fetch_array($rows)) {
       $id = $row["id"];
       $title = $row["title"];
       $price = $row["price"];
       // 顯示選購商品的表單
?>   
   <tr>
      <td><?php echo $id ?></td>
      <td><?php echo $title ?></td>
      <td><?php echo $price ?></td>
      <td><form action="savecart.php" method="post">
          <input type="text" size=5 name="Quantity" value="1"></td>
      <td><input type="submit" value="訂購"></td>
          <input type="hidden" name="BookID" 
                 value="<?php echo $id ?>">
          <input type="hidden" name="BookTitle" 
                 value ="<?php echo $title ?>">
          <input type="hidden" name="BookPrice"
                 value="<?php echo $price ?>">
          </form>
   </tr>
<?php } ?>
</table>
<?php
}
mysqli_free_result($rows);
?>
<hr/>| <a href="index.php">網路商店</a>
| <a href="shoppingcart.php">檢視購物車內容</a> |
</body>
</html>