<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>Ch4_4.php</title>
</head>
<body>
<?php
// 使用array()指定結合陣列的元素
$arr = array( "color"=>"黑色", "name"=> "陳會安", 
              "shape"=>"三角形", 100 ); // 沒有指定,鍵值是0
if (!isset($arr["type"])) {  // 新增元素
   // 不存在, 所以新增
   $arr["type"] = "PHP";
   echo "新增type元素值PHP成功!<br/>";
}
// 顯示陣列元素
foreach($arr as $key=>$value) echo "$key=>$value  ";
echo "<br/>";
// 直接指定陣列變數值
$arr["color"] = "紅色";
$arr["name"] = "江小魚";
$arr["shape"] = "圓形";
$arr[] = 50;   // 沒有指定, 鍵值為0
// 刪除集合陣列的元素
unset($arr["type"]);        // 刪除type元素
echo "刪除type元素值PHP!<br/>";
print_r($arr); echo "<br/>"; // 顯示陣列元素
?>
</body>
</html>
