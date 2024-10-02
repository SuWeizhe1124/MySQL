<?php
header("Expires: Mon, 26 Jul 2015 05:00:00 GMT");
$name = $_POST["name"]; 
$email = $_POST["email"]; 
$result = "-1";  // 新增記錄失敗
if (!(empty($name) || empty($email))) {
   // 有輸入資料
   $db = mysqli_connect("localhost", "root", "A12345678");
   mysqli_select_db($db, "contact");
   $sql = "SELECT * FROM contacts WHERE name = '$name'";
   $rows = mysqli_query($db, $sql); // 執行SQL查詢              
   $num = mysqli_num_rows($rows); // 取得記錄數  
   if ($num <= 0) {  // 沒有此聯絡人
      $sql = "INSERT INTO contacts " .
             "(name, email) VALUES ('$name', '$email')";
      if (mysqli_query($db, $sql)) { // 執行SQL指令
          $result = "1"; // 新增記錄成功
      }     
   }
}
echo $result;
mysqli_close($db);
?> 
