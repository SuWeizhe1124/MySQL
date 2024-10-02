<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>Ch10_3_2.php</title>
<?php
class Person {   // 父類別Person類別
   private $id;  // 身份證字號
   function setId($id) { $this->id = $id; }
   protected function printPerson() {  // 顯示個人資料
      echo "身份證字號: " . $this->id . "<br/>";
   }
}
// Customer類別宣告, 繼承自Person類別 
class Customer extends Person {
   private $credit_level;    // 信用等級
   // 建構子方法
   function __construct($id, $credit_level = 5) {
      parent::setId($id);  // 呼叫父類別的成員方法
      $this->credit_level = $credit_level;
   }
   function printCustomer() { // 顯示客戶資料      
      parent::printPerson();  // 呼叫父類別的成員函數
      echo "信用等級: " . $this->credit_level . "<hr/>";
   }
}
?>
</head>
<body>
<?php
$joe = new Customer("A1234567");  // 建立物件
$jane = new Customer("B5678924", 8); 
// 更改身份證字號 - 呼叫繼承的成員方法
$joe->setId("C3456789");
$joe->printCustomer();      // 呼叫物件的成員方法
$jane->printCustomer();
?>
</body>
</html>
