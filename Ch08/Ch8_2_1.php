<?php
$file = "MyData.txt";  // 文字檔案名稱
if (isset($_POST["send"])) { // 是否是表單送回
   $name = $_POST["name"];   // 取得欄位值
   if (!empty($name)) {      // 有輸入資料
      $email = $_POST["email"];  // 取得欄位值
      $fp = fopen($file, "w");   // 開啟檔案
      // 建立寫入檔案的資料
      $data = $name . "," . $email . "\r\n";
      fwrite($fp, $data);  // 寫入檔案
      $result = "註冊資料已經寫入檔案MyData.txt!";
   }
} 
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>Ch8_2_1.php</title>
</head>
<body>
<h1>寫入檔案</h1><hr/>
<form method="post" action="">
  <div>
    <label for="name">姓名: </label>
    <input type="text" name="name" id="name" value="陳會安"/>
  </div><br/>
  <div>
    <label for="email">電郵: </label>
    <input type="text" name="email" id="email" value="hueayn@ms2.hinet.net"/>
  </div><br/>
  <input type="submit" name="send" value="註冊"/>
</form>
<?php 
  if (!empty($result)) {
     echo "<p>訊息: " . $result . "</p>";
  }
?>
</body>
</html>