<?php
header("Content-type: image/png");  // PNG格式圖片
$img = imagecreate(300, 300);       // 建立空白圖片
imagecolorallocate($img, 255, 255, 0);// 指定背景色彩
$red = imagecolorallocate($img, 255, 0, 0); // 色彩
$green = imagecolorallocate($img, 128, 204, 204); // 色彩
imagerectangle($img, 20, 20, 80, 80, $green);     // 正方形
imagerectangle($img, 100, 20, 280, 80, $red);     // 長方形
imageellipse($img, 50, 150, 75, 75, $green);      // 圓形
imageellipse($img, 200, 150, 150, 75, $red);      // 橢圓形
$poly_points = array(150, 200, 100, 280, 200, 280);
imagepolygon($img, $poly_points, 3, $green);      // 三角形
imagepng($img);      // 送出PNG格式圖片資料
imagedestroy($img);  // 釋放圖片資源
?>