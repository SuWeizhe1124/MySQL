<?php
if (isset($_POST["send"])) { // 判斷是否是表單送回
   $lat = $_POST["lat"];     // 取得欄位值
   $lon = $_POST["lon"];
   if (!empty($lat) && !empty($lon)) {  // 有輸入資料
       $para = "lat=" . $lat . "&lon=" . $lon;
       header("Location: Ch14_5_2a.php?" . $para);
   }
   else {
       $result = "輸入的經緯度座標錯誤...";
   }
}
else $result = "請輸入經緯度座標...";   
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>Ch14_5_2.php</title>
</head>
<body>
<form method="post" action="">
    <p>緯度: 
    <input type="text" name="lat" id="lat" value="37.49"/></p>
    <p>經度: 
    <input type="text" name="lon" id="lon" value="-122.29"/></p>
    <input type="submit" name="send" value="顯示地圖"/>
</form><hr/>
<?php echo $result ?>
</body>
</html>
