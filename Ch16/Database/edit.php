<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>編輯通訊錄</title>
</head>
<body>
<?php
$id = $_GET["id"];          // 取得URL參數的編號
$action = $_GET["action"];  // 取得操作種類
$db = mysqli_connect("localhost", "root", "A12345678");
mysqli_select_db($db, "database"); // 選擇資料庫
// 執行的操作
switch ($action) {
   case "update": // 更新操作
      // 取得欄位資料
      $name = $_POST["Name"];
      $tel = $_POST["Tel"];
      $sql = "UPDATE address SET name='".$name.
             "', tel='".$tel."' WHERE id=".$id;
      mysqli_query($db, $sql); // 執行SQL指令
      header("Location: search.php"); // 轉址serach.php
      break;
   case "del":    // 刪除操作
      $sql = "DELETE FROM address WHERE id=".$id;
      mysqli_query($db, $sql); // 執行SQL指令
      header("Location: search.php"); // 轉址serach.php
      break;
   case "edit":   // 編輯操作
      $sql = "SELECT * FROM address WHERE id=".$id;
      $rows = mysqli_query($db, $sql); // 執行SQL指令
      $row = mysqli_fetch_array($rows);
      $name = $row[name];  // 取得欄位name
      $tel = $row["tel"];  // 取得欄位tel
// 顯示編輯表單
?>
<h2>更新通訊錄</h2><hr/>
<form action="edit.php?action=update&id=<?php echo $id ?>"
      method="post">
<table border=1>
<tr><td>姓名: </td>
   <td><input type="text" name="Name" size="20" 
   maxlength="10" value="<?php echo $name ?>"></td></tr>
<tr><td>電話 : </td>
   <td><input type="text" name="Tel" size="20"
   maxlength="20" value="<?php echo $tel ?>"></td></tr>
</table><br/>
<input type="submit" value="更新聯絡人">
</form><br/>
<?php       
       break;
} 
mysqli_close($db); // 關閉連接 
?>
<a href="index.php">通訊錄首頁</a>
| <a href="add.php">新增聯絡人</a>
| <a href="search.php">搜尋通訊錄</a>
</body>
</html>