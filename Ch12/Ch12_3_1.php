<?php
$error = ""; $result = ""; 
if (isset($_POST["send"])) {  // 是否是表單送回
   $id = $_POST["id"];   // 取得表單欄位值
   $title = $_POST["title"];
   $author = $_POST["author"];
   $price = $_POST["price"];
   $category = $_POST["category"];
   $pubdate = $_POST["pubdate"];
   if (empty($id)) { // 欄位沒填
      $error = "書號欄位不可是空白<br/>";
   }
   else { 
      if (empty($title)) { // 欄位沒填
         $error .= "書名欄位不可是空白<br/>";
      } else { // 表單處理
         $db = mysqli_connect("localhost", "root", "A12345678");
         mysqli_select_db($db, "mybooks"); // 選擇資料庫
         $sql = "INSERT INTO books " .
         "(id, title, author, price, category, pubdate) " .
         "VALUES ('$id', '$title', '$author', " . 
         "$price, '$category', '$pubdate')";
         if (!mysqli_query($db, $sql)) { // 執行SQL指令
            $result = "新增記錄失敗...<br/>" . mysqli_error($db);
         }
         else $result = "新增記錄成功...<br/>";
         mysqli_close($db); // 關閉連接         
      }
   }
}
else {  // 初始表單欄位值
   $id = ""; $title = ""; $author = "";
   $category = ""; $price = ""; $pubdate = "";
} 
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>Ch12_3_1.php</title>
</head>
<body>
<h1>新增記錄</h1><hr/>
<div style="color: red"><?php echo $error ?></div>
<form method="post" action="">
    <div>
        <label for="id">書 號:</label>
        <input type="text" name="id" id="id"
               value="<?php echo $id ?>"/>       
    </div>
    <div>
        <label for="title">書 名:</label>
        <input type="text" name="title" id="title"
               value="<?php echo $title ?>"/>
    </div>
    <div>
        <label for="author">作 者:</label>
        <input type="text" name="author" id="author"
               value="<?php echo $author ?>"/>
    </div>
    <div>
        <label for="price">書 價:</label>
        <input type="text" name="price" id="price"
               value="<?php echo $price ?>"/>
    </div>
    <div>
        <label for="category">分 類:</label>
        <input type="text" name="category" id="category"
               value="<?php echo $category ?>"/>
    </div>
    <div>
        <label for="pubdate">出版日:</label>
        <input type="text" name="pubdate" id="pubdate"
               value="<?php echo $pubdate ?>"/>
    </div><hr/>
    <input type="submit" name="send" value="新增記錄"/>
</form>
<?php echo $result ?>
</body>
</html>
