<?php
$msg = "";
if (isset($_POST["send"])) {     // 是否是表單送回
   $to = $_POST["to"];           // 取得收件者
   $subject = $_POST["subject"]; // 取得主旨
   $body = $_POST["content"];    // 取得郵件內容
   // 送出郵件
   if (mail($to, $subject, $body))
      $msg .= "郵件已經成功的寄出! <br/>";
   else
      $msg .= "郵件寄送失敗!<br/>";
}
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>Ch8_4_2.php</title>
</head>
<body>
<h1>電子郵件處理</h1><hr/>
<form method="post" action="">
    <div>
      <label for="to">收件者: </label>
      <input type="text" name="to" id="to"/>
    </div><br/>
    <div>
      <label for="subject">郵件主旨: </label>
      <input type="text" name="subject" id="subject"/>
    </div><br/>
    <div>
      <label for="content">郵件內容: </label>
      <textarea name="content" id="content" rows="5">
      </textarea>
    </div><br/>
    <input type="submit" name="send" value="送出"/>
</form>
<?php 
if (!empty($msg)) {
    echo "<p>" . $msg . "</p>";
}
?>
</body>
</html>
