<?php
header("Content-type: image/jpeg"); // JPG格式圖片
// 從JPG圖檔來載入圖片
$img = imagecreatefromjpeg("Koala.jpg");
// 文字色彩
$red = imagecolorallocate($img, 255, 0, 0);
// 載入字型檔案
$font = imageloadfont("04b.gdf");
// 文字內容
$text = "Koala!";
// 繪出文字內容
imagestring($img, $font, 25, 200, $text, $red);
imagejpeg($img);             // 送出JPG格式圖片資料
imagedestroy($img);          // 釋放圖片資源
?>
