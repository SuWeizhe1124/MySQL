<?php
header("Expires: Mon, 26 Jul 2015 05:00:00 GMT");
$name = $_POST["name"]; // 取得欄位值
$db = mysqli_connect("localhost", "root", "A12345678");
mysqli_select_db($db, "contact");
$sql = "SELECT * FROM contacts WHERE name = '$name'";
$rows = mysqli_query($db, $sql); // 執行SQL查詢              
$num = mysqli_num_rows($rows); // 取得記錄數  
if ($num <= 0) {  // 是否有此記錄
  $email = "沒有此聯絡人!";
} else {
  $row = mysqli_fetch_row($rows);
  $email = $row[1];
}
echo $email;
mysqli_close($db);
?> 
