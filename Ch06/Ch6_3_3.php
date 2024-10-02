<?php
$result = "";
if (isset($_POST["send"])) {  // 是否是表單送回   
  $s = (int) $_POST["courses"];  // 取得使用者的選擇
  switch($s) {
     case 1: $result = "程式設計";
         break;
     case 2: $result = "網頁設計";
         break;
     case 3: $result = "手機程式設計"; 
         break;     
     case 4: $result = "資料庫系統";
         break;
  }
}
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>Ch6_3_3.php</title>
</head>
<body>
<form method="post" action="">
    <div>
    <label for="courses">選擇課程: </label>
    <select name="courses" id="courses">
        <option value="1">程式設計</option>
        <option value="2">網頁設計</option>
        <option value="3">手機程式設計</option>
        <option value="4">資料庫系統</option>
    </select> 
    </div><br/>
    <input type="submit" value="送出" name="send"/>
</form><hr/>
<?php echo $result ?>
</body>
</html>
