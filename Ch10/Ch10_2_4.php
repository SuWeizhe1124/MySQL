<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>Ch10_2_4.php</title>
<?php
class Customer {  // 宣告Customer類別
   const MAX_CUSTOMERS = 50;          // 類別常數
   public static $bankNo = "bk100";     // 類別變數
   private static $count = 0;
   private $name;                     // 成員變數
   private $credit_level;  
   // 建構子方法
   function __construct($name, $credit_level) {
      $this->name = $name;
      $this->credit_level = $credit_level;      
      self::$count++;              // 客戶人數加一
   }
   // 類別方法
   static function numOfCustomers() { return self::$count; }
   // 成員方法
   function printCustomer() {
      echo "客戶姓名 : " .$this->name. "<br/>";
      echo "信用等級 : " .$this->credit_level. "<br/>";
   }
}
?>
</head>
<body>
<?php
$c1 = new Customer("陳會安", 8);  // 建立物件
$c2 = new Customer("江小魚", 7);
// 存取類別變數和類別常數值
echo "最大客戶數: ".Customer::MAX_CUSTOMERS."<br/>";
echo "銀行編號: ".Customer::$bankNo."<br/><hr/>";
$c1->printCustomer();  // 呼叫成員方法
echo "------------------------------<br/>";
$c2->printCustomer();
// 呼叫類別方法
echo "<hr/>目前客戶數: ".Customer::numOfCustomers()."<br/>";
?>
</body>
</html>
