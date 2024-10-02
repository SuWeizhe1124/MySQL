<?php
header("Content-type: image/jpeg"); // JPG格式圖片
$file = $_GET["image"];
// 從JPG圖檔來載入圖片
$img = imagecreatefromjpeg($file);
$new_width = 150;   // 圖片新尺寸的寬
$new_height = 150;  // 圖片新尺寸的高
$old_width = imagesx($img);   // 取得圖片寬
$old_height = imagesy($img);  // 取得圖片高
// 建立新圖片資源
$new_img = imagecreatetruecolor($new_width, $new_height);
// 建立新尺寸的縮圖
imagecopyresampled($new_img, $img, 0, 0, 0, 0, 
        $new_width, $new_height, $old_width, $old_height);
imagejpeg($new_img);         // 送出JPG格式圖片資料
imagedestroy($img);          // 釋放圖片資源
?>
