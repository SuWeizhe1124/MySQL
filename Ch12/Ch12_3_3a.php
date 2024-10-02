<?php
$price = ""; $pubdate = ""; $result = "";
$id = $_GET["id"]; // 取得書號
$db = mysqli_connect("localhost", "root", "A12345678");
mysqli_select_db($db, "mybooks"); // 選擇資料庫
if (isset($_POST["send"])) {  // 是否是表單送回
   $sql = "DELETE FROM books WHERE id='" . $id . "'";
   if (!mysqli_query($db, $sql)) // 執行SQL指令
        $result = "刪除記錄失敗...<br/>" . mysqli_error($db);
   else header("Location: Ch12_3_3.php"); // 轉址              
}
else {  // 取得圖書資料
   $sql = "SELECT * FROM books WHERE id='" . $id . "'";
   $rows = mysqli_query($db, $sql); // 執行SQL查詢
   $row = mysqli_fetch_row($rows); // 取出第1筆
   mysqli_free_result($rows);   // 釋放查詢結果
}
mysqli_close($db); // 關閉連接     
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>Ch12_3_3a.php</title>
</head>
<body>
<h1>刪除記錄</h1><hr/>
<ul>
    <li>書號: <?php echo $id ?></li>
    <li>書名: <?php echo $row[1] ?> </li>
    <li>作者: <?php echo $row[2] ?> </li>
    <li>書價: <?php echo $row[3] ?> </li>
</ul><hr/>
<form method="post" action="">
    <input type="submit" name="send" value="刪除記錄"/>
</form>
<?php echo $result ?>
</body>
</html>
