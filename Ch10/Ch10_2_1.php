<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>Ch10_2_1.php</title>
<?php
class Account { // 宣告Account類別
   var $balance;     // 成員變數
   // 成員方法
   function deposit($amt) {  // 存款
      if ($amt > 0) {
          $this->balance = $this->balance + $amt;
      }
   }
   function withdraw($amt) { // 提款
      if ($amt > 0 && $amt <= $this->balance) {
          $this->balance = $this->balance - $amt;
      }
   }   
   function getBalance() { // 取得帳戶餘額
      return $this->balance;
   }
}   
?>
</head>
<body>
<?php
$saving = new Account();      // 建立物件
$checking = new Account();
$saving->balance = 1000;   // 存取成員變數
// 在帳戶存款
$saving->deposit(500);
$checking->deposit(2000);
echo "帳戶原來的餘額:<br/>";
echo "存款帳戶餘額 = ".$saving->balance."<br/>";   // 顯示餘額
echo "支票帳戶餘額 = ".$checking->balance."<hr/>";
// 從存款帳戶匯款100元至支票帳戶
$saving->withdraw(100);
$checking->deposit(100);
echo "帳戶匯款後的餘額:<br/>";
echo "存款帳戶餘額 = ".$saving->getBalance()."<br/>";   // 顯示餘額
echo "支票帳戶餘額 = ".$checking->getBalance()."<hr/>";
?>
</body>
</html>
