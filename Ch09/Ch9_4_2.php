<?php
header("Content-type: image/png");  // PNG格式圖片
$img = imagecreate(300, 150);       // 建立空白圖片
imagecolorallocate($img, 255, 255, 0);// 指定背景色彩
$red = imagecolorallocate($img, 255, 0, 0); // 色彩
$green = imagecolorallocate($img, 128, 204, 204); // 色彩
imagefilledellipse($img, 50, 50, 75, 75, $red);      // 圓形
imagefilledellipse($img, 200, 50, 150, 75, $green);  // 橢圓形
imagepng($img);      // 送出PNG格式圖片資料
imagedestroy($img);  // 釋放圖片資源
?>
