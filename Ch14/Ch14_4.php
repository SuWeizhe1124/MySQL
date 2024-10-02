<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>Ch14_4.php</title>
<script src="jquery-2.2.0.min.js"></script>
<script src="Ch14_4.js"></script>
</head>
<body>
<h1>聯絡人管理</h1><hr/>
<form id="contactform" action="">
    <div>
        <label for="name">姓名:</label>
        <input type="text" name="name" id="name" value="陳會安"/>
    </div><br/>
    <a href="#" class="getemail">查詢電郵</a><br/><br/>
    <div>
        <label for="email">電郵:</label>
        <input type="text" name="email" id="email"/>
    </div><br/>
    <input type="submit" value="新增聯絡人"/>     
</form><br/>
<div id="msg" class="box"></div>
</body>
</html>