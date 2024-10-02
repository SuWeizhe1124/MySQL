<?php
$msg = "";
if (isset($_FILES["file"])) {  // 是否有上傳檔案資料
   // 顯示上傳檔案資訊
   $msg = "上傳檔案資訊: <hr/>";
   $msg .= "檔名: ".$_FILES["file"]["name"]."<br/>";
   $msg .= "暫存檔: ".$_FILES["file"]["tmp_name"]."<br/>";
   $msg .= "尺寸: ".$_FILES["file"]["size"]."<br/>";
   $msg .= "種類: ".$_FILES["file"]["type"]."<hr/>";
   // 儲存上傳的檔案, 即複製成上傳檔案的檔名
   if ( copy($_FILES["file"]["tmp_name"],  
             $_FILES["file"]["name"])) {
      $msg .= "檔案上傳成功<br/>";
      unlink($_FILES["file"]["tmp_name"]);  // 刪除上傳檔案
   }
   else $msg .= "檔案上傳失敗<br/>";
}
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>Ch8_3_1.php</title>
</head>
<body>
<h1>上傳檔案</h1><hr/>
<form action="" enctype="multipart/form-data"
      method="post">
  <div>
    <input type="file" name="file"/>
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
