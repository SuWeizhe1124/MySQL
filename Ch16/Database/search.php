<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>搜尋通訊錄</title>
</head>
<body>
<h2>搜尋通訊錄</h2><hr/>
<?php
if (isset($_POST["Search"])) {  // 如果是表單送回
   $db = mysqli_connect("localhost", "root", "A12345678");
   mysqli_select_db($db, "database"); // 選擇資料庫
   // 建立基本的SQL字串
   $sql = "SELECT * FROM address ";
   // 檢查是否輸入姓名
   if (chop($_POST["Name"]) != "" )
      $name = "name LIKE '%".$_POST["Name"]."%' ";
   else
      $name = "";
   // 檢查是否輸入電話號碼
   if (chop($_POST["Tel"]) != "" )
      $tel = "tel LIKE '%".$_POST["Tel"]."%' ";
   else
      $tel = "";
   // if條件組合SQL字串
   if ( chop($name) != "" && chop($tel) != "" )
      $sql.= "WHERE ".$name." AND ".$tel;
   elseif ( chop($name) != "" )  // 只有姓名
          $sql .= "WHERE ".$name;
   elseif ( chop($tel) != "" )  // 只有電話號碼
          $sql .= "WHERE ".$tel;
   $sql.= " ORDER BY name";  // 最後加上排序
   $rows = mysqli_query($db, $sql);      // 執行SQL查詢
   $num = mysqli_num_rows($rows);   // 取得記錄數
   echo "<table border=1><tr><td>編號</td>";
   echo "<td>姓名</td><td>電話</td><td>功能</td></tr>";
   // 表格顯示查詢結果
   if ($num > 0) { // 顯示每一筆記錄
      while ($row = mysqli_fetch_array($rows)) {
         $id = $row["id"];
         echo "<tr>";
         echo "<td>" . $id . "</td>";
         echo "<td>" . $row["name"] . "</td>";
         echo "<td>" . $row["tel"] . "</td>";
         echo "<td><a href='edit.php?action=edit&id=";
         echo $id . "'><b>編輯</b> |";
         echo "<a href='edit.php?action=del&id=";
         echo $id . "'><b>刪除</b></td>";
         echo "</tr>";
      }
   }
   echo "</table><hr/>";
   mysqli_free_result($rows);
   mysqli_close($db);               // 關閉伺服器連接
}
?>
<form action="search.php" method="post">
<table border=1>
<tr>
  <td>搜尋姓名: </td>
  <td><input type="text" name="Name" 
             size=10 maxlength=20></td>
</tr>
<tr>
  <td>搜尋電話: </td>
  <td><input type="text" name="Tel"
             size="20" maxlength="20"></td>
</tr>
</table><br/>
<input type="submit" name="Search" value="搜尋">
</form><br/>
<a href="index.php">通訊錄首頁</a>
| <a href="add.php">新增聯絡人</a>
| <a href="search.php">搜尋通訊錄</a>
</body>
</html>