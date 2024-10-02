<?php
$error = "";   $result = "";
// 保留的欄位值
$user = "";
$showform = true;  // true顯示表單
if (isset($_POST["send"])) {  // 是否是表單送回   
   // 取得表單欄位值
   $user = $_POST["user"];
   $pass1 = $_POST["pass1"];
   $pass2 = $_POST["pass2"];
   // 檢查帳號欄位是否有輸入資料
   if (empty($user)) { // 欄位沒填
      $error = "帳號欄位空白<br/>";
   }
   else { // 檢查兩次密碼是否相同
      if ($pass1 != $pass2) { // 密碼錯誤
         $error = "密碼輸入不相同<br/>";
      } else { // 表單處理, 顯示欄位輸入的資料
         $showform = false;
         $result .= "帳號: ".$user."<br/>";
         $result .= "密碼: ".$pass1."<br/>";
      }
   }
}
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>Ch6_4.php</title>
</head>
<body>
<?php if ( $showform ) { // 顯示HTML表單
?>  <div style="color: red"><?php echo $error ?></div>
    <form method="post" action="">
      <p>
        <label for="user">使用者帳號: </label>
        <input type="text" name="user" id="user" 
                    value="<?php echo $user ?>">
      </p>
      <p>
        <label for="pass1">輸入密碼: </label>
        <input type="password" name="pass1" id="pass1" />
      </p>
      <p>
        <label for="pass2">再輸入密碼: </label>
        <input type="password" name="pass2" id="pass2" />
      </p>
      <input type="submit" name="send" value="註冊使用者"/>
    </form>
<?php 
} else
   echo $result;  // 顯示表單處理結果
?>
</body>
</html>
