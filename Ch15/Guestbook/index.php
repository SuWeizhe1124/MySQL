<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>訪客留言簿</title>
</head>
<body>
<h2>訪客留言簿</h2><hr/>
<form action="guestbook.php" method="post">
<table>
  <tr>
    <td>姓名: </td>
    <td><input type="text" size="30" name="Name"></td>
  </tr>
  <tr>
    <td>電子郵件: </td>
    <td><input type="text" size="30" name="Email"></td>
  </tr>
  <tr>
    <td>留言: </td>    
    <td>
       <textarea name="Message" rows="4" cols="30"></textarea>
    </td>
  </tr>
</table><hr/>
<input type="submit" name="Send" value="送出留言">
<input type="reset" name="Reset" value="重設欄位">
</form><br/>
| <a href="index.php">新增留言</a> | <a href="showmessage.php">檢視留言</a> |
</body>
</html>