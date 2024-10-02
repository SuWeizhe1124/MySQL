<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>圖片版的訪客計數</title>
</head>
<?php
// 設定訪客計數器的最大位數
$maxlength = 6;
// 檢查計數檔案是否存在
if (!file_exists("counter.txt")) {
    $counter = 0;
    $file = fopen("counter.txt","w");  // 開檔
    // 將變數的內容寫入檔案
    fputs($file, $counter);
    fclose($file);// 關閉檔案
} else {   // 開啟指定的檔案
    $file = fopen('counter.txt','r+');
    // 以位元組的方式讀取檔案內容
    $counter = fread($file, filesize("counter.txt"));
    fclose($file); // 關閉檔案
}
$counter +=1;  // 增加計數
// 以寫入模式開啟檔案，並將新的人數寫入檔案
$file = fopen("counter.txt","w+");
fputs($file, $counter);
fclose($file);
// 顥示訪客計數, 在計數前填入0
$str = str_repeat("0", $maxlength-strlen($counter));
$str .= $counter;
// 顯示數字圖片, 使用GD函數庫繪出數字
for ( $i = 0; $i < $maxlength; $i++ )
   echo "<img src='showNum.php?Num=".substr($str,$i,1)."'>";
?>
</body>
</html>