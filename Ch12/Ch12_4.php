<?php
$records_per_page = 2;  // 每一頁顯示的記錄筆數
// 取得URL參數的頁數
if (isset($_GET["Pages"])) $pages = $_GET["Pages"];
else                       $pages = 1;
$db = mysqli_connect("localhost", "root", "A12345678");
mysqli_select_db($db, "mybooks"); // 選擇資料庫
$sql = "SELECT * FROM books";
$rows = mysqli_query($db, $sql); // 執行SQL查詢
$total_records=mysqli_num_rows($rows);  // 取得記錄數
// 計算總頁數
$total_pages = ceil($total_records/$records_per_page);
// 計算這一頁第1筆記錄的位置
$offset = ($pages - 1)*$records_per_page;
mysqli_data_seek($rows, $offset);   // 移到此筆記錄
mysqli_close($db); // 關閉伺服器連接
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>Ch12_4.php</title>
</head>
<body>
<h1>圖書目錄(共<?php echo $total_records ?>筆)</h1></hr/>
<table border="1">
    <thead>
       <tr>
           <th>書號</th>
           <th>書名</th>
           <th>書價</th>
           <th>出版日</th>
       </tr>
    </thead>
    <tbody>
        <?php
        $i = 1;
        // 顯示每一筆記錄  
        while ($row = mysqli_fetch_array($rows) 
               and $i <= $records_per_page) {
           $id = $row["id"];
           $title = $row["title"];
           $price = $row["price"];
           $pubdate = $row["pubdate"];
           echo "<tr>";
           echo "<td>" . $id . "</td>";
           echo "<td>" . $title . "</td>";
           echo "<td>" . $price . "</td>";
           echo "<td>" . $pubdate . "</td>";
           echo "</tr>";
           $i++;
        }
        mysqli_free_result($rows);   // 釋放查詢結果
        ?>
     </tbody>
</table>
<?php
  if ( $pages > 1 )  // 顯示上一頁
    echo "<a href='Ch12_4.php?Pages=".($pages-1).
         "'>上一頁</a>| ";
  for ( $i = 1; $i <= $total_pages; $i++ )
    if ($i != $pages) // 顯示頁碼
      echo "<a href='Ch12_4.php?Pages=".$i."'>".
      $i."</a> ";
    else echo "$i ";
  if ( $pages < $total_pages )  // 顯示下一頁
    echo "|<a href='Ch12_4.php?Pages=".($pages+1).
         "'>下一頁</a> ";
?>
</body>
</html>
