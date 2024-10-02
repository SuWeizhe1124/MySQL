<?php
header("Content-type: image/png");  // PNG格式圖片
$img = imagecreate(200, 150);       // 建立空白圖片
imagecolorallocate($img, 255, 0, 0);// 指定背景色彩為紅色
imagepng($img);                     // 送出PNG格式圖片資料
imagedestroy($img);                 // 釋放圖片資源
?>

