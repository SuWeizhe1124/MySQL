<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>Ch7_2_1a.php</title>
</head>
<body>
<form method="post" action="Ch7_2_1b.php">
    <div>
      <div>Q2: 請問下列哪一個不是伺服端網頁技術?</div>
      <input type="radio" name="Q2" id="js" value="JavaScript"/>
      <label for="js">JavaScript</label><br/>
      <input type="radio" name="Q2" id="asp.net" value="ASP.NET"/>
      <label for="asp.net">ASP.NET</label><br/>
      <input type="radio" name="Q2" id="php" value="PHP"/>
      <label for="php">PHP</label><br/>
      <input type="radio" name="Q2" id="jsp" value="JSP"/>
      <label for="jsp">JSP</label>      
    </div><br/>
    <input type="submit" value="下一題"/>
    <input type="hidden" name="Q1" id="Q1" value="<?php echo $_POST["Q1"] ?>"/>
</form>
</body>
</html>
