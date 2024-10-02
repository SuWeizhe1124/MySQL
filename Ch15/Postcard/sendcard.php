<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>寄送電子賀卡</title>
</head>
<body>
<?php
// 賀卡資料的文字檔
$cardfile = "postcard.txt";
// 使用亂數取得卡號
$cardid = rand(10000, 99999);
// 卡號加上IP位址
$cardid.= str_replace(".","", $_SERVER["REMOTE_ADDR"]);
// 取得賀卡的資料
$sender = $_POST["Sender"];
$msg = nl2br($_POST["Msg"]);
$receiver = $_POST["Receiver"];
$from = $_POST["From"];
$img = $_POST["Img"];
$today = $_POST["Date"];
$to = $_POST["To"];
// 建立通知郵件的內容
$body = "在賀卡網站有一張電子賀卡!!! "."\r\n";
$body.= "賀卡卡號: ".$cardid."\r\n";
$body.= "請進入pickup.html網頁檢視賀卡!!!"."\r\n";
// 寫入賀卡檔案
$fp = fopen($cardfile, "a+"); // 開啟檔案
fwrite($fp, $cardid."||".$sender."||".$from."||".
      $msg."||".$receiver."||".$img."||".$today."\n");
fclose($fp); // 關閉檔案
echo "<b>".$sender."</b>謝謝使用電子賀卡!!!<br/>";
echo "賀卡卡號: <b> " . $cardid . "</b><br/>";
// 寄送通知的電子郵件
if ( !mail($to, "電子賀卡通知", $body) )
   echo "郵件寄送發生錯誤:!<br/>";
else
   echo "寄送通知到: " . $to . " 成功..<br/>";
?>
<br/><br/><a href="pickup.html">檢視賀卡</a>
</body>
</html>