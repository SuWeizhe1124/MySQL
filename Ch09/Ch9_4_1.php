<?php
header("Content-type: image/png");  // PNG格式圖片
$img = imagecreate(300, 150);       // 建立空白圖片
imagecolorallocate($img, 255, 255, 0);// 指定背景色彩
$red = imagecolorallocate($img, 255, 0, 0); // 色彩
$green = imagecolorallocate($img, 128, 204, 204); // 色彩
imagefilledrectangle($img, 20, 20, 80, 80, $red);     // 正方形
imagefilledrectangle($img, 100, 20, 280, 80, $green);   // 長方形
imagepng($img);      // 送出PNG格式圖片資料
imagedestroy($img);  // 釋放圖片資源
?>