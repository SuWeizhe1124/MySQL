<?php
$today = date("m/d/Y"); // 取得今天的日期
// 取得賀卡資料
$receiver = $_POST["Receiver"];
$to = $_POST["To"];
$msg = $_POST["Msg"];
$img = $_POST["Img"];
$sender = $_POST["Sender"];
$from = $_POST["From"];
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>電子賀卡預覽</title>
</head>
<body>
<table border="0">
  <tr><td>
     <table border="0">
        <tr><td>寄送日期: </td><td><?php echo $today ?></td></tr>
        <tr><td>收件者: </td><td><?php echo $receiver ?></td></tr>   
        <tr><td>寄件者: </td><td><?php echo $sender ?></td></tr>   
        <tr><td>訊息內容: </td><td><?php echo $msg ?></td></tr>
     </table>
  </td><td>
     <img src="images\<?php echo $img?>" width="100" height="80">
  </td></tr>
</table>
<form method="post" action="sendcard.php">
<input type="hidden" name="Receiver" 
                     value="<?php echo $receiver?>">
<input type="hidden" name="Msg" value="<?php echo $msg?>">
<input type="hidden" name="To" value="<?php echo $to ?>">
<input type="hidden" name="Sender"
                     value="<?php echo $sender?>">
<input type="hidden" name="From" value="<?php echo $from?>">
<input type="hidden" name="Img" value="<?php echo $img?>">
<input type="hidden" name="Date" value="<?php echo $today?>">
<input type="submit" value="寄送賀卡">
</form>
</body>
</html>