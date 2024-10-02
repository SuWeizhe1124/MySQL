<?php
if (isset($_COOKIE["myCookie"])) {
   // 取得Cookie值
   $cookieValue = $_COOKIE["myCookie"];
}
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>Ch7_3a.php</title>
</head>
<body>
<div>myCookie值 = "<?php echo $cookieValue ?>"</div>
<?php 
// 顯示陣列Cookie的內容
while (list($key, $value) = each($_COOKIE["myUser"]))
   echo "$key = $value<br/>";
?>
</body>
</html>
