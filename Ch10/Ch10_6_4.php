<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>Ch10_6_4.php</title>
<?php
// 函數: 傳回參數x的1/x結果
function inverse($x) {
    if (!$x) {
        // 丟出例外
        throw new Exception("除以0的例外...", 555);
    }
    return 1/$x;
}
?>
</head>
<body>
<?php
// 例外處理程式敘述
try {
    echo "1/5 = " . inverse(5) . "<br/>"; // 呼叫函數
    echo "1/0 = " . inverse(0) . "<br/>";  
} catch ( Exception $e ) {  // 處理例外物件
    print "檔案: " . $e->getFile() . "<br/>";
    print "行號: " . $e->getLine() . "<br/>";
    print "錯誤碼: " . $e->getCode() . "<br/>";
    print "錯誤訊息: " . $e->getMessage() . "<br/>";
    exit();
}
?>
</body>
</html>
