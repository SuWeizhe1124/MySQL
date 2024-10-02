<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>Ch7_2_3.php</title>
</head>
<body>
<form method="get" action="Ch7_2_2a.php">
  <div>
    <label for="id">URL參數id: </label>
    <input type="text" name="id" id="id" value="100"/>
  </div><br/>
  <input type="submit" value="送出資料"/>
</form><br/>
<a href="Ch7_2_3a.php?id=50">送出資料</a> 
<a href="Ch7_2_3a.php">送出資料(沒有id參數)</a>
</body>
</html>
