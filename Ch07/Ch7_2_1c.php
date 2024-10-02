<?php
$correct = 0;
$q1 = $_POST["Q1"];  // 取得隱藏欄位值
$q2 = $_POST["Q2"];
$q3 = $_POST["Q3"];
// 檢查第1題是否答對
if ((!empty($q1)) && $q1 == "PHP") {
   $correct += 1;   // 答對題數加1
}
// 檢查第2題是否答對
if ((!empty($q2)) && $q2 == "JavaScript") {
   $correct += 1;   // 答對題數加1
}
// 檢查第3題是否答對
if ((!empty($q3)) && $q3 == "JSP") {
   $correct += 1;   // 答對題數加1
}
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>Ch7_2_1c.php</title>
</head>
<body>
<div>
  <div>你的成績 = <?php echo ((100.0 * $correct)/3.0) ?> 分</div>
  Q1:答案: "<?php echo $q1 ?>" - 正確PHP<br/>
  Q2:答案: "<?php echo $q2 ?>" - 正確JavaScript<br/>
  Q3:答案: "<?php echo $q3 ?>" - 正確JSP<br/>
</div>
</body>
</html>
