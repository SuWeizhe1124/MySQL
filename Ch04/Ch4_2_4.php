<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>Ch4_2_4.php</title>
</head>
<body>
<?php
// 使用const建立常數陣列
const FRUITS = array(
    "Watermelon", 
    "Strawberries",
    "Pomegranate",
    "Blackberry",
);
var_dump(FRUITS);
echo "<br/>";
// 使用define()建立常數陣列
define("ANIMALS", [
    "Dog", 
    "Cat",
    "Bat",
    "Bird",
]);
echo ANIMALS[1];
echo "<br/>";
echo ANIMALS[2];
echo "<br/>";
?>
</body>
</html>
