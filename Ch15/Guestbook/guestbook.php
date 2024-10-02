<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>新增訪客留言</title>
</head>
<body>
<h2>新增訪客留言</h2><hr/>
<?php
$file = "guestbook.txt";
if ( !file_exists($file) ) { // 檔案不存在
   $fp = fopen($file, "w");  // 建立文字檔案
   fclose($fp);
}
$email = $_POST["Email"];  // 取得電子郵件地址
$email = "<a href=mailto:".$email.">".$email."</a>";
$messages = nl2br($_POST["Message"]);
$fp = fopen($file, "a");  // 新增留言
$today = date("Y年m月d日 星期w h:i:s a");
$msg  = "<b>留言時間：</b>".$today."<br/>";
$msg .= "<b>姓名：</b>".$_POST["Name"]."<br/>";
$msg .= "<b>電子郵件：</b>".$email."<br/>";
$msg .= "<b>留言：</b>".$messages."<br/><hr/>";
fputs($fp, $msg);  // 寫入文字檔案
fclose($fp);       // 關閉文字檔案
echo $msg;
?>
| <a href="index.php">新增留言</a> | <a href="showmessage.php">檢視留言</a> |
</body>
</html>