<?php
// 取得URL參數
if (isset($_GET["DB"]))
   $dbname = $_GET["DB"];
else
   $dbname = "mybooks";
if (isset($_GET["Sql"]))
   $sql = $_GET["Sql"];
else
   $sql = "SELECT * FROM books";
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>Ch12_5.php</title>
<?php
function error_handle($db) {
    echo "錯誤代碼: ".mysqli_errno($db)."<br/>";
    echo "錯誤訊息: ".mysqli_error($db)."<br/>";
    exit();
}
?>
</head>
<body>
<a href="Ch12_5.php?DB=mysql">選擇mysql資料庫</a><br/>
<a href="Ch12_5.php?DB=myDB">選擇mydb資料庫</a><br/>
<?php
// 建立MySQL伺服器連接 
$db = mysqli_connect("localhost", "root", "A12345678");
if (mysqli_connect_errno() == 0) {
    echo "開啟MySQL伺服器連接成功!<br/>";
    mysqli_select_db($db, $dbname);
    if (mysqli_errno($db) != 0)
        error_handle($db); 
    else
        echo "選擇資料庫: $dbname 成功!<br/>";
    $rows = mysqli_query($db, $sql);
    if (mysqli_errno($db) != 0)
        error_handle($db); 
    else
        echo "SQL指令: $sql 查詢成功!<br/>";
    mysqli_free_result($rows);
    mysqli_close($db);  // 關閉伺服器連接
}
?>
</body>
</html>
