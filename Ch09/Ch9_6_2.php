<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>Ch9_6_2.php</title>
</head>
<body>
<?php
// 圖檔清單陣列
$images = array("Desert.jpg" , "Koala.jpg");
// 使用迴圈建立<img>標籤來顯示陣列圖片的縮圖
foreach ($images as $element) {
?>
<img src="thumbnails.php?image=<?php echo $element;?>"/>
<?php
}  
?>
</body>
</html>