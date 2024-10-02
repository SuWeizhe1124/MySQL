<?php
header("Content-type: image/png");  // PNG格式圖片
$img = imagecreate(300, 200);       // 建立空白圖片
imagecolorallocate($img, 255, 255, 0);// 指定背景色彩
$red = imagecolorallocate($img, 255, 0, 0); // 色彩
$poly_points = array(50, 10, 50, 150, 200, 150);
imagefilledpolygon($img, $poly_points, 3, $red);  // 多邊形
imagepng($img);      // 送出PNG格式圖片資料
imagedestroy($img);  // 釋放圖片資源
?>
