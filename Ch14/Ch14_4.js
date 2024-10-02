$(document).ready(function () {
  $("form").submit(function () {
    // 使用HTTP POST方法送出Ajax請求
    $.ajax({
      type: 'POST',
      url: 'saveContact.php',
      data: $('#contactform').serialize(),
      success: function (data) {
        var value = parseInt(data); // 取得傳回值
        if (value == 1)
          $('#msg').html("已經成功新增記錄!");
        else
          $('#msg').html("新增記錄失敗!");
      }
    });
    return false;
  });
  $('a.getemail').click(function () {
    // 使用HTTP POST方法送出Ajax請求
    $.ajax({
      type: 'POST',
      url: 'getEmailAddress.php',
      data: $('#contactform').serialize(),
      success: function (data) {
        $('#msg').html("載入網頁成功!");
        $('#email').val(data)
      }
    });
    return false;
  });
});