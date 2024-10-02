<?php
header("Content-type: image/jpeg"); // JPG格式圖片
$img = imagecreate(200, 200);       // 建立空白圖片
imagecolorallocate($img, 0, 0, 255);// 指定背景色彩為藍色
imagejpeg($img);                    // 送出JPG格式圖片資料
imagedestroy($img);                 // 釋放圖片資源
?>



