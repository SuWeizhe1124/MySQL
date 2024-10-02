<?php
session_start();  // 啟用交談期
$username = "";
$password = "";
$msg = "";
// 取得表單欄位
if (isset($_POST["Username"]))
   $username = $_POST["Username"];
if (isset($_POST["Password"]))
   $password = $_POST["Password"];
// 檢查是否輸入使用者名稱和密碼
if ($username != "" && $password != "") {
   // 建立MySQL伺服器連接
   $db = mysqli_connect("localhost","root","A12345678");
   mysqli_select_db($db, "login"); // 選擇資料庫
   // 建立SQL指令字串
   $sql = "SELECT * FROM users WHERE password='";
   $sql.= $password."' AND username='".$username."'";
   $rows = mysqli_query($db, $sql); // 執行SQL指令字串
   // 是否查詢到記錄
   if (mysqli_fetch_row($rows) != false) {
      // 成功登入, 指定Session變數
      $_SESSION["login_session"] = true;
      $_SESSION["username"] = $username;
      header("Location: index.php");  // 轉址至首頁
   } else
      $msg =  "使用者名稱或密碼錯誤!<br/>";
   mysqli_close($db);  // 關閉伺服器連接
}
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>登入網站</title>
</head>
<body>
<h2>輸入使用者名稱和密碼登入網站</h2><hr/>
<form action="login.php" method="post">
<table>
 <tr>
   <td>使用者名稱 : </td>
   <td><input type="text" name="Username" 
             size="19" maxlength="10"></td>
 </tr>
 <tr>
   <td>使用者密碼 : </td>
   <td><input type="password" name="Password"
              size="20" maxlength="10"></td>
 </tr>
</table><br/>
<input type="submit" value="登入網站"><br/><br/>
<small><a href="register.php">註冊新使用者</a></small>
</form>
<p><?php echo $msg; ?></p>
</body>
</html>