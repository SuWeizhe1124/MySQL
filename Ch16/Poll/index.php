<?php
// 建立MySQL伺服器連接
$db = mysqli_connect("localhost","root","A12345678");
mysqli_select_db($db, "poll"); // 選擇資料庫
// 建立SQL字串
$sql = "SELECT * FROM poll";
$rows = mysqli_query($db, $sql); // 執行SQL查詢
mysqli_close($db);  // 關閉伺服器連接
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>網路投票系統</title>
</head>
<body>
<h2>網路投票系統</h2><hr/>
<table border="1">
<tr>
  <th>名稱</th><th>投票</th><th>結果</th>
</tr>
<?php
// 顯示每一個票選的項目
while($row = mysqli_fetch_row($rows)) {
?>
<tr>
   <td><?php echo $row[1] ?></td>
   <td><a href='joinpoll.php?Pollid=<?php echo $row[0] ?>'>投票</a></td>
   <td><a href='viewpoll.php?Pollid=<?php echo $row[0] ?>'>結果</a></td>
</tr>
<?php
}
mysqli_free_result($rows);
?>
</table>
<hr/>
</body>
</html>
