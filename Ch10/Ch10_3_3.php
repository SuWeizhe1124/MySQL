<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>Ch10_3_3.php</title>
<?php
class Person {  // 父類別Person類別
   private $id; // 身份證字號
   // 建構子方法
   function __construct($id) { $this->id = $id; }
   protected function printPerson() { // 顯示個人資料
      echo "身份證字號: " . $this->id . "<br/>";
   }    
}
// Student類別宣告, 繼承自Person類別 
class Student extends Person {
   private $grade;     // 成績
   // 建構子方法
   function __construct($id, $grade = 60) {
      parent::__construct($id);  // 呼叫父類別的建構子
      $this->grade = $grade;
   }
   // 覆寫父類別的成員方法
   function printPerson() {   // 顯示學生資料
      parent::printPerson();  // 呼叫父類別的成員方法
      echo "學生成績: " . $this->grade . "<hr/>";
   }    
}
?>
</head>
<body>
<?php
$joe = new Student("A1234567");  // 建立物件
$jane = new Student("B5678924", 75); 
$joe->printPerson();      // 呼叫物件的成員方法
$jane->printPerson();
?>
</body>
</html>
