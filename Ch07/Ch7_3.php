<?php
if (isset($_POST["send"])) {  // 是否是表單送回
    $value = $_POST["cvalue"];  // 取得欄位值
    if (!empty($value)) { // 有輸入資料
        // 建立Cookie
        $date = strtotime("+10 days", time()); // 期限
        setcookie("myCookie", $value, $date);  
    }     
    // 建立陣列Cookie
    setcookie("myUser[user]", "hueyan", time()+3600);
    setcookie("myUser[role]", "admin", time()+3600);
    header("Location: Ch7_3a.php"); // 轉址
} 
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>Ch7_3.php</title>
</head>
<body>
<form method="post" action="">
    <div>
      <label for="cvalue">Cookies值: </label>
      <input type="text" name="cvalue" id="cvalue" value="100"/>
    </div><br/>
    <input type="submit" name="send" value="建立Cookie"/>
</form>
</body>
</html>
