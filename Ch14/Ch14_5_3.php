<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>Ch14_5_3.php</title>
</head>
<body>
<?php
$address = array("台灣台北市中正區忠孝西路一段50號11樓之6", 
                 "台灣台北101大樓", 
                 "台灣高雄85大樓",
                 "台灣台中火車站"); 
?>
請選擇地址或地標: <hr/>
<form method="post" action="Ch14_5_3a.php">
    <input type="radio" name="address"
           value="<?php echo $address[0]; ?>" checked>松崗資產<br/>
	<input type="radio" name="address" 
           value ="<?php echo $address[1]; ?>">台北101<br/>
	<input type="radio" name="address" 
           value ="<?php echo $address[2]; ?>">高雄85大樓<br/>
	<input type="radio" name="address" 
           value="<?php echo $address[3]; ?>">台中火車站<hr/>
	<input type="submit" name="send" value="顯示地圖"/>
</form>
</body>
</html>
