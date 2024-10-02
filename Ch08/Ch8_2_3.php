<?php
$file = "MyData.txt";
if (file_exists($file)) {  // 檢查檔案是否存在
   $data = file($file);    // 讀取整個檔案至陣列
}
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>Ch8_2_3.php</title>
</head>
<body>
<h1>讀取檔案</h1><hr/>
<ul>
<?php 
if (isset($data)) {  // 檔案有資料
    foreach ($data as $line) {  // 每一行
?>
   <li>
<?php
       $fields = explode(',', $line);
       foreach($fields as $item) { // 每一欄
          echo "<p>" . $item . "</p>";
       }
?>
   </li>
    <?php
    }    
}
?>
</ul>
</body>
</html>
