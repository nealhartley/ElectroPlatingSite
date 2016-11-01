<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <link type="text/css" rel="stylesheet" href="main.css">
        
        <title></title>
    </head>
    <body>
        <div class = "header">
            
            <div class = "title">
                <h1>Wellington <br>  &nbsp; Electroplating</h1>     
            </div>
                
        </div>
        
        <div class = "info_body">
            
            
        </div>
        
        <div class = "location">
        
            <div id = "map_google">
                
            </div>
            
            <div class = "contact_info">
                <p>
                    18(a) Cornish St<br>
                    Petone<br>
                    Ph 04 568 5924
                </p>
            </div>
            
            <div class = "contact_form"></div>
            
        </div>
        
        <div class = "bottom_bar_info">
            <h2>Wellington <br>  &nbsp;Electroplating</h2>
            
        </div>
        
        <script>
            function initMap() {
        var uluru = {lat: -25.363, lng: 131.044};
        var map = new google.maps.Map(document.getElementById('map_google'), {
          zoom: 4,
          center: uluru
        });
        var marker = new google.maps.Marker({
          position: uluru,
          map: map
        });
      }

        </script>   
        
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAI4J9hOGjfVkFJiI_OmdMm0Myy5SHR_LY&callback=initMap" async defer>
        </script>

        
        
    </body>
</html>
