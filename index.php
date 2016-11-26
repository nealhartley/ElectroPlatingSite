<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width,initial-scale=1">
        <link type="text/css" rel="stylesheet" href="main.css">
        <link href="https://fonts.googleapis.com/css?family=Taviraj:500" rel="stylesheet"> 
        <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
        <title>Wellington Electroplating, Provides quality electro plating</title>
        <meta name="description" content="provides quality electroplating in the Wellington region. Will service all your electroplating needs."/>
        <meta name="robots" content="index,follow"/>
        <meta http-equiv="expires" content="-1">
        <meta http-equiv="Pragma" content="no-cache" />
        <meta http-equiv="Cache-Control" content="no-cache" />
    </head>
    <body>
        <div class = "header">
            <div class = "logo"></div>
            
            <div class = "title">                                
                <h1>WELLINGTON ELECTROPLATING</h1>     
            </div>
                
        </div>
        <!--main content of the website, holds the body with business details plus the location div with 
            contact details-->
        <div class = "main_content">
            
            <!--contains main info about what the business does plus some images of their work-->
            <div class = "info_body">
                
                <div class = "info_container">
                    <div class = "image">

                        <div class = "picture_harley">
                        </div>
                        
                        <p><i>72 custom Harley by Hutt City Autos</i></p>
                    </div>

                    <h3>Wellington Electroplating ltd</h3>
                    <p>Providing you with quality plating in:</p>
                    <ul type="circle">
                        <li>Copper</li>
                        <li>Nickel</li>
                        <li>Chrome</li>
                        <li>Production Chrome Plating</li>
                        <li>Production Bright Zinc Plating</li>
                        <li>Zinc Barrel Plating</li>
                        <li>Zinc Chromate</li>
                        <li>Black Zinc</li>
                        <li>Silver</li>
                        <li>Tin</li>
                        <li>Heat Treatment</li>
                        <li>Long and Short Runs</li>
                        <li>Metal Polishing</li>
                    </ul>
                </div>
                
            </div>
            <!--contains all details related to getting in contact with the business-->
            <div class = "location">

                <div id = "map_google">

                </div>

                <div class = "contact_info">
                    
                    <h3>Contact Info</h3>
                    <p>
                        18(a) Cornish St,<br>                       
                        Petone<br>
                        <br>
                        Phone: 04 568 5924
                        <br>
                        Email: sales@wgtnelectro.co.nz
                    </p>
                </div>

                <div class = "contact_form"></div>
            
            </div>
        </div>
        
        <div class = "bottom_bar_info">
            <div class = "bottom_name_info">
                <h2>Wellington  &nbsp; Electroplating</h2>
                <p>Phone: 04 568 5924 &nbsp&nbsp Email: Sales@wgtnelectro.co.nz</p>
            </div>
            
        </div>
        
        <script>
            function initMap() {
        var cornish = {lat: -41.222512, lng: 174.860600};
        var map = new google.maps.Map(document.getElementById('map_google'), {
          zoom: 14,
          center: cornish
        });
        var marker = new google.maps.Marker({
          position: cornish,
          map: map
        });
      }

        </script>   
        
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAI4J9hOGjfVkFJiI_OmdMm0Myy5SHR_LY&callback=initMap" async defer>
        </script>
        
        <script>
            var height = $(".title").height();
            
            console.log(height);
            
            $(".logo").width(height);
            $(".logo").height(height);
            
            window.addEventListener('resize', function(event){
                
                var height = $(".title").height();
            
                console.log(height);
            
                $(".logo").width(height);
                $(".logo").height(height);
                
                var windowWidth = window.innerWidth
                || document.documentElement.clientWidth
                || document.body.clientWidth;
                
                if(windowWidth < 433){
                    $(".logo").width(140);
                    $(".logo").height(140);
                }
                
            });
            
        </script>
        
        
    </body>
</html>
