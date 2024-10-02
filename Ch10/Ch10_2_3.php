<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>Ch10_2_3.php</title>
<?php
class Account { // 宣告Account類別
   private $balance;     // 成員變數
   // 建構子
   function __construct($amt = 650) {
      echo "呼叫建構子...<br/>";
      $this->balance = $amt;
   }
   // 解構子
   function __destruct() {
      echo "呼叫解構子...<br/>";
   }
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
$saving = new Account(1500);      // 建立物件
$checking = new Account(2000);
echo "<hr/>帳戶餘額:<br/>";
echo "存款帳戶餘額 = ".$saving->getBalance()."<br/>";   // 顯示餘額
echo "支票帳戶餘額 = ".$checking->getBalance()."<hr/>";
?>
</body>
</html>
