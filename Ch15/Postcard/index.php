<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>電子賀卡系統</title>
</head>
<body>
<form method="post" action="preview.php">
<table border="0">
  <tr>
     <td><h4>選擇賀卡圖片:</h4>
     <table border="0">
        <tr>
           <td>
           <img src="images\img1.jpg" width="100" height="80">
           </td>
           <td>
           <img src="images\img2.jpg" width="100" height="80">
           </td>
        </tr>
        <tr>
           <td>
           <input type="radio" name="Img" value="img1.jpg" checked>無尾熊
           </td>
           <td>
           <input type="radio" name="Img" value="img2.jpg">城堡
           </td>
        </tr>
        <tr>
           <td>
           <img src="images\img3.jpg" width="100" height="80">
           </td>
           <td>
           <img src="images\img4.jpg" width="100" height="80">
           </td>
        </tr>
        <tr>
           <td>
           <input type="radio" name="Img" value="img3.jpg">企鵝
           </td>
           <td>
           <input type="radio" name="Img" value="img4.jpg">鬰金香
           </td>
        </tr>
     </table>
     </td>
     <td>
        <h4>輸入賀卡資料:</h4>
        <table border="0">
           <tr>
              <td>收件者: </td>
              <td><input name="Receiver"></td>
           </tr>
           <tr>
              <td>收件者的電子郵件: </td>
              <td><input name="To"></td>
           </tr>
           <tr>
              <td>寄件者: </td>
              <td><input name="Sender"></td>
           </tr>
           <tr>
              <td>寄件者的電子郵件: </td>
              <td><input name="From"></td>
           </tr>
        </table>
        <h4>輸入賀卡內容:</h4>
        <textarea cols="35" name="Msg" rows="4">
        </textarea><br><br>
        <input type="submit" value="預覽賀卡">
     </td>
  </tr>
</table>
</form>
</body>
</html>