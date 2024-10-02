<?php
$pollid = $_GET["Pollid"];
// 建立MySQL伺服器連接
$db = mysqli_connect("localhost","root","A12345678");
mysqli_select_db($db, "poll"); // 選擇資料庫
// 建立SQL字串
$sql = "SELECT * FROM POLL WHERE pollid='".$pollid."'";
$rows = mysqli_query($db, $sql); // 執行SQL查詢
mysqli_close($db);          // 關閉伺服器連接 
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>參加投票</title>
</head>
<body>
<h3>投票問題:
<?php
$row = mysqli_fetch_array($rows);
echo $row["pollquestion"]; ?></h3>
<hr/>
<form method="post" action="savepoll.php">
<input type="hidden" name="Pollid" value="<?php echo $pollid ?>">
<table border="0">
<?php // 顯示票選的選項
   for ($i = 0; $i < 3; $i++) {
      $choice = $row["choice".$i];
?>
    <tr>       
       <td>
        <input type="radio" name="Choice" value="<?php echo ($i+1) ?>">
       </td>
       <td><?php echo $choice ?></td>
    </tr>
<?php
   }
   mysqli_free_result($rows);
?>
</table><br/>
<input type="submit" value="送出投票">
</form>
<hr/>| <a href="index.php">回到票選</a> |
</body>
</html>
