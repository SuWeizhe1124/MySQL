<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>Ch5_5.php</title>
<?php include("shared/MyFunc.inc"); ?>
</head>
<body>
<?php require("shared/Header.php"); ?>
攝氏32度=華氏<?php echo convertTemperature(32)?>度<br/>
<?php
$f = convertTemperature(100);
print "攝氏100度=華氏". $f ."度<br/>";
?>
</body>
</html>
