<?php
header("Content-type: image/png");  // PNG格式圖片
$img = imagecreate(201, 201);       // 建立空白圖片
imagecolorallocate($img, 255, 255, 0);// 指定背景色彩
// 建立色彩識別
$black = imagecolorallocate($img, 0, 0, 0);
$red   = imagecolorallocate($img, 255, 0, 0);
$green = imagecolorallocate($img, 0, 255, 0);
$blue  = imagecolorallocate($img, 0, 0, 255);
// 繪出頭
imagearc($img, 100, 100, 200, 200, 0, 360, $black);
// 繪出嘴巴
imagearc($img, 100, 100, 150, 150, 25, 155, $red);
// 繪出左眼和右眼
imagefilledarc($img, 60, 75, 50, 50, 0, 360, $green, IMG_ARC_PIE);
imagefilledarc($img, 140, 75, 50, 50, 0, 360, $blue, IMG_ARC_PIE);
imagepng($img);      // 送出PNG格式圖片資料
imagedestroy($img);  // 釋放圖片資源
?>
