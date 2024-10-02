<?php
$address = $_POST["address"];  // 取得欄位值
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>Ch14_5_3a.php</title>
<style type="text/css">
html { height: 100% }
body { height: 100%; margin: 0px; padding: 0px }
#map_canvas { height: 100% }
</style>
<script src="https://maps.google.com/maps/api/js?sensor=false"></script>
<script src="jquery-2.2.0.min.js"></script>
<script>
$(document).ready(function () {
    var map;
    // 取得地圖的div標籤物件
    var myCanvas = document.getElementById("map_canvas");
    // 建立座標物件
    var myLatlng = new google.maps.LatLng(0,0);
    // 建立地圖參數
    var myOptions = {
        zoom: 12,
        center: myLatlng,
        mapTypeId: google.maps.MapTypeId.ROADMAP
    };
    // 建立地圖物件
    map = new google.maps.Map(myCanvas, myOptions);
    // Google的地圖解碼服務
    geocoder = new google.maps.Geocoder(); 
    // 取得地址
    var address = document.getElementById("address").value;     
    if (geocoder) {
        geocoder.geocode(  // 執行地圖解碼
        {
            "address": address   // 地址
        },
        function(results, status) {  // 回撥函數
            // 是否成功
            if (status == google.maps.GeocoderStatus.OK) {     
                // 指定地圖中心座標      
                map.setCenter(results[0].geometry.location);  
                // 新增標記圖示 
                var marker = new google.maps.Marker(
                {
                    map : map,
                    position : results[0].geometry.location
                }); 
            } 
            else {  
                alert("錯誤! 地址搜尋失敗...." + status); 
            }
        });     
    }   
});
</script>
</head>
<body>
地址或地標: <?php echo $address; ?>
<div id="map_canvas" style="width:100%; height:100%"></div>
<input type="hidden" id="address" value="<?php echo $address; ?>">
</body>
</html>
