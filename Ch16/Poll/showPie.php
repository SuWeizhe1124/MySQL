<?php 
header('Content-type: image/png'); 
$one = $_GET['one'];  // 取得URL參數
$two = $_GET['two'];
$slide = $one + $two; 
// 指定圖片尺寸
$size = 300;  // 派圖尺寸
$thick = 30;  // 3D厚度
$handle = imagecreate($size, $size);   // 建立圖片
// 背景色彩 
$background = imagecolorallocate($handle, 255, 255, 255); 
// 建立色彩識別
$red = imagecolorallocate($handle, 255, 0, 0); 
$green = imagecolorallocate($handle, 0, 255, 0); 
$blue = imagecolorallocate($handle, 0, 0, 255); 
$darkred = imagecolorallocate($handle, 150, 0, 0); 
$darkblue = imagecolorallocate($handle, 0, 0, 150); 
$darkgreen = imagecolorallocate($handle, 0, 150, 0); 
// 建立3D外觀
for ($i = ($size/2 + $thick); $i > ($size/2); $i--) { 
    imagefilledarc($handle, $size /2, $i, $size, $size /2, 0, $one, $darkred, IMG_ARC_PIE); 
    imagefilledarc($handle, $size /2, $i, $size, $size /2, $one, $slide , $darkblue, IMG_ARC_PIE); 
    if ($slide != 360) {
       imagefilledarc($handle, $size /2, $i, $size, $size /2, $slide, 360 , $darkgreen, IMG_ARC_PIE); 
    }
}
// 繪出派圖
imagefilledarc($handle, $size /2, $size /2, $size, $size /2, 0, $one , $red, IMG_ARC_PIE); 
imagefilledarc($handle, $size /2, $size /2, $size, $size /2, $one, $slide , $blue, IMG_ARC_PIE); 
if ($slide != 360) {
    imagefilledarc($handle, $size /2, $size /2, $size, $size /2, $slide, 360 , $green, IMG_ARC_PIE); 
}
imagepng($handle);   // 產生圖片
?>
