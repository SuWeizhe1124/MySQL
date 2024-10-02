<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>新增聯絡人</title>
</head>
<body>
<h2>新增聯絡人</h2><hr/>
<?php
$result = "";
// 是否是表單送回
if (isset($_POST["Name"]) && isset($_POST["Tel"]) ) {
   $name = $_POST["Name"];  // 取得欄位資料
   $tel = $_POST["Tel"];
   // 檢查是否有輸入欄位資料
   if ($name != "" && $tel != "") {
      $db = mysqli_connect("localhost", "root", "A12345678");
      mysqli_select_db($db, "database"); // 選擇資料庫
      // 建立SQL字串
      $sql = "INSERT INTO address (name, tel) values('";
      $sql.= $name."', '".$tel."')";
      if (!mysqli_query($db, $sql)) { // 執行SQL指令
            $result = "新增聯絡人失敗...<br/>" . mysqli_error($db);
      }
      else $result = "新增聯絡人成功...<br/>";
      mysqli_close($db); // 關閉連接         
   }
}
?>
<form action="add.php" method="post">
<table border=1>
<tr>
   <td>姓名: </td>
   <td><input type="text" name="Name" 
              size="20" maxlength="10"></td>
</tr>
<tr>
   <td>電話: </td>
   <td><input type="text" name="Tel" 
              size="20" maxlength=20></td>
</tr>
</table><br/>
<input type="submit" value="新增聯絡人">
</form><br/>
<div style="color: red"><?php echo $result ?></div>
<a href="index.php">通訊錄首頁</a>
| <a href="add.php">新增聯絡人</a>
| <a href="search.php">搜尋通訊錄</a>
</body>
</html>