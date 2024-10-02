<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>Ch12_1_3.php</title>
</head>
<body>
<?php
// 建立MySQL伺服器連接 
$db = mysqli_connect("localhost", "root", "A12345678") 
        or die("無法開啟MySQL伺服器連接!<br/>");
echo "主機資訊: ".mysqli_get_host_info($db)."<br/>";
echo "伺服器資訊: ".mysqli_get_server_info($db);
echo "<br/>通訊協定版本: ".mysqli_get_proto_info($db);
echo "<br/>客戶端函數庫資訊: ".mysqli_get_client_info();
mysqli_close($db);   // 關閉伺服器連接
?>
</body>
</html>
