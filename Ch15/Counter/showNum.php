<?php
header("Content-type: image/jpeg"); // JPG格式圖片
$img = imagecreate(50, 50);         // 建立空白圖片
imagecolorallocate($img, 255, 255, 255);  // 指定背景色彩
// 文字色彩
$red = imagecolorallocate($img, 255, 0, 0);
$font = imageloadfont("04b.gdf");  // 載入字型檔案
$text = $_GET["Num"];  // 文字內容
// 繪出文字內容
imagestring($img, $font, 0, 0, $text, $red);
imagejpeg($img);             // 送出JPG格式圖片資料
imagedestroy($img);          // 釋放圖片資源
?>
