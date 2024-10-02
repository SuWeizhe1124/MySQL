<?php
header("Content-type: image/png");  // PNG格式圖片
$img = imagecreate(200, 200);       // 建立空白圖片
imagecolorallocate($img, 255, 255, 0);// 指定背景色彩
imagesetthickness($img, 5);        // 線寬         
$red = imagecolorallocate($img, 255, 0, 0); // 線的色彩
$x = 0;    // 指定座標
$y = 0;
$w = imagesx($img) - 1;   // 取得圖片寬
$z = imagesy($img) - 1;   // 取得圖片高
// 繪出圖片對角2條紅色虛線
imagedashedline($img, $x, $y, $w, $z, $red);
imagedashedline($img, $w, $y, $x, $z, $red);
imagepng($img);      // 送出PNG格式圖片資料
imagedestroy($img);  // 釋放圖片資源
?>