<?php
$price = ""; $pubdate = ""; $result = "";
$id = $_GET["id"]; // 取得書號
$db = mysqli_connect("localhost", "root", "A12345678");
mysqli_select_db($db, "mybooks"); // 選擇資料庫
if (isset($_POST["send"])) {  // 是否是表單送回
   // 取得表單欄位值
   $price = $_POST["price"];
   $pubdate = $_POST["pubdate"];
   $sql = "UPDATE books SET price=$price," .
   "pubdate='$pubdate' WHERE id='" . $id . "'";
   if (!mysqli_query($db, $sql)) // 執行SQL指令
        $result = "更新記錄失敗...<br/>" . mysql_error($db);
   else header("Location: Ch12_3_2.php"); // 轉址              
}
else {  // 取得書價與出版日
   $sql = "SELECT * FROM books WHERE id='" . $id . "'";
   $rows = mysqli_query($db, $sql); // 執行SQL查詢
   $row = mysqli_fetch_array($rows);
   $price = $row["price"];
   $pubdate = $row["pubdate"];
   mysqli_free_result($rows);   // 釋放查詢結果
}
mysqli_close($db); // 關閉連接     
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>Ch12_3_2a.php</title>
</head>
<body>
<h1>更新記錄</h1><hr/>
<form method="post" action="">
     <div>
       <label for="id">書號: </label><?php echo $id ?>       
     </div>
     <div>
       <label for="price">書價:</label>
       <input type="text" name="price" id="price"
              value="<?php echo $price ?>"/>
     </div>
     <div>
       <label for="pubdate">出版日:</label>
       <input type="text" name="pubdate" id="pubdate"
              value="<?php echo $pubdate ?>"/>
     </div><hr/>
     <input type="submit" name="send" value="更新記錄"/>
</form>
<?php echo $result ?>
</body>
</html>
