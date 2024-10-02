<?php
// 開啟伺服器連接
$db = mysqli_connect("localhost", "root", "A12345678");
if (!$db) die("錯誤: 無法連接MySQL伺服器!" . mysqli_connect_error());
mysqli_select_db($db, "mybooks") or  // 選擇資料庫
   die("錯誤: 無法選擇資料庫!" . mysqli_error($db));
$sql = "SELECT * FROM books";
$rows = mysqli_query($db, $sql); // 執行SQL查詢              
$num = mysqli_num_rows($rows); // 取得記錄數
mysqli_close($db); // 關閉伺服器連接
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>Ch12_2_1.php</title>
</head>
<body>
<table border="1">
    <thead>
       <tr>
           <th>書號</th>
           <th>書名</th>
           <th>作者</th>
           <th>書價</th>
       </tr>
    </thead>
    <tbody>
    <?php
    if ($num > 0) { // 有記錄
        // 顯示每一筆記錄  
        for ($i = 0;$i < $num; $i++ ) {
           // 取出記錄資料
           $row = mysqli_fetch_row($rows);
           echo "<tr>";
           echo "<td>" . $row[0] . "</td>";
           echo "<td>" . $row[1] . "</td>";
           echo "<td>" . $row[2] . "</td>";
           echo "<td>" . $row[3] . "</td>";
           echo "</tr>";
        }
     }
     mysqli_free_result($rows);
     ?>
     </tbody>
</table>
</body>
</html>