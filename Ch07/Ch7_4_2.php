<?php
session_start();  // 啟用交談期
if (isset($_POST["send"]) ) {   // 是否是表單送回
   $myname = $_POST["myname"];  // 取得欄位值
   // 是否有myName的Session變數
   if (!isset($_SESSION["myName"]) && (!empty($myname))) {
      $_SESSION["myName"] = $myname; // 建立Session變數
   }
   header("Location: Ch7_4_2a.php"); // 轉址
} 
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>Ch7_4_2.php</title>
</head>
<body>
<form method="post" action="">
    <div>
      <label for="myname">Session值: </label>
      <input type="text" name="myname" id="myname" value="Joe"/>
    </div><br/>
    <input type="submit" name="send" value="建立Session"/>
</form>
</body>
</html>
