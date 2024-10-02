<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>Ch10_2_2.php</title>
<?php
class Account { // 宣告Account類別
   private $balance;     // 成員變數
   // 成員方法
   public function deposit($amt) {  // 存款
      if ($amt > 0) {
          $this->balance = $this->balance + $amt;
      }
   }
   public function withdraw($amt) { // 提款
      if ($amt > 0 && $this->checkBalance($amt)) { // 呼叫private方法
          $this->balance = $this->balance - $amt;
      }
   }   
   public function getBalance() { // 取得帳戶餘額
      return $this->balance;
   }
   private function checkBalance($amt) {  // 檢查金額是否小於餘額
       if ($amt <= $this->balance)
           return TRUE;
       else 
           return FALSE;
   }
}   
?>
</head>
<body>
<?php
$saving = new Account();      // 建立物件
$checking = new Account();
// 在帳戶存款
$saving->deposit(1500);
$checking->deposit(2000);
echo "帳戶原來的餘額:<br/>";
echo "存款帳戶餘額 = ".$saving->getBalance()."<br/>";   // 顯示餘額
echo "支票帳戶餘額 = ".$checking->getBalance()."<hr/>";
// 從存款帳戶匯款100元至支票帳戶
$saving->withdraw(100);
$checking->deposit(100);
echo "帳戶匯款後的餘額:<br/>";
echo "存款帳戶餘額 = ".$saving->getBalance()."<br/>";   // 顯示餘額
echo "支票帳戶餘額 = ".$checking->getBalance()."<hr/>";
?>
</body>
</html>
