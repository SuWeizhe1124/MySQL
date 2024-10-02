<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>Ch13_1.php</title>
</head>
<body>
<?php
// 建立MySQL伺服器連接 
$mysqli = new mysqli("localhost","root","A12345678");
if ( mysqli_connect_errno() ) {
   echo "連接誤代碼: ".mysqli_connect_errno()."<br/>";
   echo "連接錯誤訊息: ".mysqli_connect_error()."<br/>";
   exit();
}
$mysqli->select_db("mybooks");  // 選擇mybooks資料庫
$sql = "SELECT * FROM books";
echo "SQL查詢字串: $sql <br/>";
// 送出查詢的SQL指令
if ( $result = $mysqli->query($sql) ) { 
   echo "<b>圖書資料:</b><br/>";  // 顯示查詢結果
   // 取得欄位數
   $total_fields = $result->field_count;
   echo "欄位數: $total_fields 個<br/>";
   // 取得記錄數
   $total_records = $result->num_rows;
   echo "記錄數: $total_records 筆<br/>"; 
   while( $row = $result->fetch_assoc() ){ 
      echo $row["id"]."-".$row["title"]."<br/>";
   } 
   // 釋放佔用的記憶體 
   $result->close(); 
} 
$mysqli->close();  // 關閉伺服器連接
?>
</body>
</html>
