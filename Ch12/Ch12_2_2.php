<?php
// 開啟伺服器連接
$db = mysqli_connect("localhost", "root", "A12345678");
mysqli_select_db($db, "mybooks");     // 選擇資料庫
$sql = "SELECT * FROM books";   // 建立SQL指令字串
$rows = mysqli_query($db, $sql);      // 執行SQL查詢
$num = mysqli_num_rows($rows);   // 取得記錄數
mysqli_close($db);               // 關閉伺服器連接
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>Ch12_2_2.php</title>
</head>
<body>
<h1>顯示圖書目錄</h1><hr/>
<ul>
    <?php
    if ($num > 0) { // 顯示每一筆記錄  
        while ($row = mysqli_fetch_array($rows)) {
            echo "<li>";
            echo "<h3>" . $row["id"] . "</h3>";
            echo "<p>" . $row["title"] . " - ";
            echo $row["price"] . "</p>";
            echo "</li>";
        }
    }
    mysqli_free_result($rows);
    ?>
</ul>
</body>
</html>
