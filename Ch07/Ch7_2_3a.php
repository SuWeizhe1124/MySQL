<?php
$value = $_GET["id"] ?? "1000";  // 取得傳遞的資料    
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>Ch7_2_3a.php</title>
</head>
<body>
<p>URL參數id的值 = <?php echo $value ?></p>
</body>
</html>
