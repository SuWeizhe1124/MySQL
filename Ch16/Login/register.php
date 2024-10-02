<?php
$username = "";
$email = "";
$msg = "";
// 取得表單欄位
if (isset($_POST["Username"]))
   $username = $_POST["Username"];
if (isset($_POST["Email"]))
   $email = $_POST["Email"];
// 檢查是否輸入使用者名稱和密碼
if ($username != "" && $email != "") {
   // 建立MySQL伺服器連接
   $db = mysqli_connect("localhost","root","A12345678");
   mysqli_select_db($db, "login"); // 選擇資料庫
   $sql = "SELECT * FROM users ";
   $sql.= "WHERE username='".$username."'";
   $rows = mysqli_query($db, $sql);
   // 使用者是否存在
   if (mysqli_fetch_row($rows) == false) {
      $password = rand(100000, 999999); // 取得密碼
      $sql="INSERT INTO users(username,password,email)".
           " VALUES('".$username."','".
           $password."','".$email."')";
      mysqli_query($db, $sql) or die("SQL字串執行錯誤!<br>");
      $msg  = "使用者註冊成功!<br/>";
      $msg .= "使用者密碼: ".$password."<br/>";
      $body = "使用者名稱: ".$username."\r\n";
      $body.= "使用者密碼: ".$password."\r\n";
      // 寄送密碼通知的電子郵件
      if (mail($email, "密碼通知", $body))
         $msg .= "寄送密碼通知到: ".$email." 成功..<br/>";
      else
         $msg .= "使用郵件寄送密碼錯誤!<br/>";
      }
   else
      $msg =  "使用者名稱已經存在!<br/>";
   mysqli_close($db); // 關閉伺服器連接
}
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>註冊會員</title>
</head>
<body>
<h2>輸入使用者名稱和電郵註冊會員</h2><hr/>
<form action="register.php" method="post">
<table>
  <tr>
    <td>使用者名稱: </td>
    <td><input type="text" name="Username" 
               size="20" maxlength="15"></td>
  </tr>
  <tr>
    <td>電子郵件地址: </td>
    <td><input type="text" name="Email"
               size="20" maxlength="30"></td>
  </tr>
</table><br/>
<input type="submit" value="註冊會員"><br/><br/>
<small>密碼將使用電子郵件寄出
<a href="login.php">登入網站</a></small>
</form>
<p><?php echo $msg; ?></p>
</body>
</html>