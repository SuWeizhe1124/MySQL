<?php
// 取得表單欄位內容
$pollid = $_POST["Pollid"];
$choice = $_POST["Choice"];
// 新增資料庫投票的選擇
if ($choice != "") {
   // 建立MySQL伺服器連接
   $db = mysqli_connect("localhost","root","A12345678");
   mysqli_select_db($db, "poll"); // 選擇資料庫
   // 建立新增記錄的SQL指令字串
   $sql = "INSERT INTO pollresults VALUES(";
   $sql .= "'".$pollid."',";
   $sql .= $choice.",";
   $sql .= "'".$_SERVER["REMOTE_ADDR"]."')";
   // 更新資料表的記錄
   mysqli_query($db, $sql);
   mysqli_close($db);          // 關閉伺服器連接 
}
header("Location: viewpoll.php?Pollid=".$pollid);
?>

