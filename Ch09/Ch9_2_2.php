<?php
header("Content-type: image/jpeg"); // JPG格式圖片
// 從JPG圖檔來載入圖片
$img = imagecreatefromjpeg("Desert.jpg");
imagejpeg($img);                    // 送出JPG格式圖片資料
imagedestroy($img);                 // 釋放圖片資源
?>




