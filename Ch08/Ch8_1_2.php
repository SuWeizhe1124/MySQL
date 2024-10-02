<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>Ch8_1_2.php</title>
</head>
<body>
<?php 
$file = "Ch8_1_2";
// 檢查檔案是否存在
if ( file_exists($file. ".php") )
      print "檔案: $file.php 存在<br/>";
else  print "檔案: $file.php 不存在<br/>";
// 複製檔案
if (!copy($file. ".php", $file. ".bak")) 
   print ("檔案: $file.php複製成bak失敗<br/>");
else
   print "檔案: $file.php 複製成bak成功<br/>";
rename($file. ".bak", "Ch8_1_2.txt");  // 檔案更名
print "檔案: $file.bak 更名成Ch8_1_2.txt<br/>";
$file = "Ch8_1_2.txt";
unlink($file);   // 刪除檔案
print "檔案: $file 已經刪除<br/>";
?>
</body>
</html>