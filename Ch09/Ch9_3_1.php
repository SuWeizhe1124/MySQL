<?php
header("Content-type: image/png");  // PNG格式圖片
$img = imagecreate(200, 200);       // 建立空白圖片
imagecolorallocate($img, 255, 255, 0);// 指定背景色彩
imagesetthickness($img, 3);        // 線寬         
$red = imagecolorallocate($img, 255, 0, 0); // 線的色彩
$black = imagecolorallocate($img, 0, 0, 0); // 線的色彩
$x = 0;    // 指定座標
$y = 0;
$w = imagesx($img) - 1;   // 取得圖片寬
$z = imagesy($img) - 1;   // 取得圖片高
// 繪出圖片四邊的四條紅色實線
imageline($img, $x, $y, $x, $y+$z, $red);
imageline($img, $x, $y, $x+$w, $y, $red);
imageline($img, $x+$w, $y, $x+$w, $y+$z, $red);
imageline($img, $x, $y+$z, $x+$w ,$y+$z, $red);
// 繪出圖片對角2條黑色實線
imageline($img, $x, $y, $w, $z, $black);
imageline($img, $w, $y, $x, $z, $black);
imagepng($img);      // 送出PNG格式圖片資料
imagedestroy($img);  // 釋放圖片資源
?>

