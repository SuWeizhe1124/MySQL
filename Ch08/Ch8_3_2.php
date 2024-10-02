<?php
$msg = "";
if (isset($_FILES["file"])) {  // 是否有上傳檔案資料
   //  處理多個檔案, 最多3個
   for ( $i = 0; $i < 3; $i++) {
      // 取得上傳檔案資訊
      $name = $_FILES["file"]["name"][$i];
      $tmp = $_FILES["file"]["tmp_name"][$i];
      if ( !empty($name) ) {  // 有上傳檔案名稱
         copy($tmp, $name);   // 複製建立上傳檔案
         $msg .= "檔案$name 上傳成功<br/>";
         unlink($tmp);  // 刪除暫存檔案
      }
   }
}
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>Ch8_3_2.php</title>
</head>
<body>
<h1>上傳多個檔案</h1><hr/>
<form action="" enctype="multipart/form-data"
      method="post">
  <div>
    選擇檔案:<input type="file" name="file[]"/><br/>
    選擇檔案:<input type="file" name="file[]"/><br/>
    選擇檔案:<input type="file" name="file[]"/><hr/>
  </div><br/>
  <input type="submit" value="上傳檔案" />
</form>
<?php 
if (!empty($msg)) {
    echo "<p>" . $msg . "</p>";
}
?>
</body>
</html>
