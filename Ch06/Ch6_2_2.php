<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>Ch6_2_2.php</title>
</head>
<body>
<form method="post" action="Ch6_2_2.php">
    <p>回應: 
    <textarea name="comments" id="comments" rows="5" cols="30">
    </textarea></p>
    <input type="submit" name="send" value="送出"/>
</form><hr/>
<?php
$result = "";
$result = "";
// 判斷是否是表單送回
if (isset($_POST["send"])) { 
   $result = $_POST["comments"];  // 取得欄位值
   echo "留言: " . $result;
   // 使用nl2br()函數處理換行
   $result1 = nl2br($_POST["comments"]);
   echo "<hr/>" . $result1;
}   
?>
</body>
</html>
