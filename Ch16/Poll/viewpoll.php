<?php
// 取得URL參數
$pollid = $_GET["Pollid"];
// 建立SQL指令字串
$sql = "SELECT * FROM POLL WHERE pollid='".$pollid."'";
// 建立MySQL伺服器連接
$db = mysqli_connect("localhost","root","A12345678");
mysqli_select_db($db, "poll"); // 選擇資料庫
$rows = mysqli_query($db, $sql); // 執行SQL查詢
$num = mysqli_num_rows($rows); // 取得記錄數
if ($num > 0) {
   // 取得票選名稱
   $row = mysqli_fetch_array($rows);
   $pollname = $row["pollname"];
   $pollquestion = $row["pollquestion"];
   // 取得票選的選項
   $total = 0;
   for ($i = 0; $i < 3; $i++) {
      $arraychoice[$i] = $row["choice".$i];
      $arrayresults[$i] = "";
      if (chop($arraychoice[$i]) != "") {
         // 取得票選的結果
         $sql = "SELECT COUNT(pollanswer) FROM pollresults ";
         $sql.= "WHERE pollid='".$pollid."' AND pollanswer=".($i+1);
         $rows1 = mysqli_query($db, $sql);
         if ($choice = mysqli_fetch_row($rows1) ) {
            $arrayresults[$i] = $choice[0];
            $total += $choice[0];
         }
      }
   }
}
mysqli_free_result($rows);
mysqli_close($db);               // 關閉伺服器連接
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>顯示投票結果</title>
<?php
function pie($vote1, $vote2, $vote3, $label1, $label2, $label3) { 
    $total = $vote1 + $vote2 + $vote3; 
    $one = round (360 * $vote1 / $total); 
    $two = round (360 * $vote2 / $total); 
    $per1 = round ($vote1 / $total * 100); 
    $per2 = round ($vote2 / $total * 100); 
    $per3 = round ($vote3 / $total * 100); 
    echo "<span style='color: red'> $label1 </span> = $vote1 票, 佔 $per1 %<br/> 
       <span style='color: blue'> $label2 </span> = $vote2 票, 佔 $per2 %<br/> 
       <span style='color: green'> $label3 </span> = $vote3 票, 佔 $per3 %<br/>"; 
    echo "<img src=showPie.php?one=".$one."&two=".$two."><br/>"; 
}     
?>
</head>
<body>
<h2>票選名稱: <?php echo $pollname ?>
<small> - 共<?php echo $total ?>人投票</small></h2>
票選問題: <?php echo $pollquestion ?><hr/>
<?php // 顯示圖形的統計結果
pie($arrayresults[0], $arrayresults[1], $arrayresults[2],
    $arraychoice[0], $arraychoice[1], $arraychoice[2]);
?>
<hr/>| <a href="index.php">回到票選</a> |
</body>
</html> 