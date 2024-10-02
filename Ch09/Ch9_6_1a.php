<?php
header("Content-type: image/jpeg"); // JPG格式圖片
// 從JPG圖檔來載入圖片
$img = imagecreatefromjpeg("Koala.jpg");
// 色彩灰階
imagefilter($img, IMG_FILTER_COLORIZE, 0, 0, 255, 50); 
imagejpeg($img);                    // 送出JPG格式圖片資料
imagedestroy($img);                 // 釋放圖片資源
?>
