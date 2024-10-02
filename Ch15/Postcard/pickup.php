<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>檢視電子賀卡</title>
</head>
<body>
<?php
// 賀卡資料的文字檔
$cardfile = "postcard.txt";
// 取得URL參數的卡號
$id = $_GET["Cardid"];
// 讀取賀卡檔案內容至陣列
$arr = file($cardfile);
// 取得陣列元素來產生賀卡
while (list($linenum, $line) = each($arr)) {
   $data = explode("||" , $line);
   if ($data[0] == $id) {
       $str = "<table border='0'>";
       $str .= "<tr><td>";
       $str .= "<table border='0'>";
       $str .= "<tr><td>寄送日期: </td><td>" . $data[6] . "</td></tr>";
       $str .= "<tr><td>收件者: </td><td>" . $data[4] . "</td></tr>";   
       $str .= "<tr><td>寄件者: </td><td>" . $data[1] ."</td></tr>";   
       $str .= "<tr><td>訊息內容: </td><td>" . $data[3] . "</td></tr>";
       $str .= "</table>";
       $str .= "</td><td>";
       $str .= "<img src='images\\" . $data[5] . "' width='100' height='80'>";
       $str .= "</td></tr>";
       $str .= "</table>";
       echo $str;  // 顯示賀卡內容
   }
}
?>
</body>
</html>