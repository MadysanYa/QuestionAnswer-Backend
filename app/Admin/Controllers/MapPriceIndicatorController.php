<?php

namespace App\Admin\Controllers;



use Encore\Admin\Controllers\AdminController;
use App\Models\MapPriceIndicator;
use Encore\Admin\Grid;
use App\Model\Invoice;
use Encore\Admin\Show;
use Illuminate\Support\Facades\Request;
use Encore\Admin\Layout\Content;
use App\Models\User;
use Encore\Admin\Form\Field\Button;
use Auth;
use Encore\Admin\Admin;
use Encore\Admin\Widgets\Table;
use Encore\Admin\Form;








class MapPriceIndicatorController extends AdminController 
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Map Price Indicator';
     /**
     * Make a grid builder.
     *
     * @return Grid
     */
     public function index(Content $MapPriceIndicator){
        $MapPriceIndicator->header($this->title);
        $MapPriceIndicator->body($this->dashboard());
        $MapPriceIndicator->body($this->grid());
       
        
        return$MapPriceIndicator;
    }
    protected function dashboard(){
    
    
 
    
    
    
    $html = <<<HTML
     <!DOCTYPE html>
    <html>
    <head>
        <meta name="viewport" content="initial-scale=1.0, user-scalable=no">
        <meta charset="utf-8">
        <title>KML Click Capture Sample</title>
        <style>
        html, body {
            height: 370px;
            padding: 0;
            margin: 0;
            }
        #map {
        height: 360px;
        width: 600px;
        overflow: hidden;
        float: left;
        border: thin solid #333;
        }
        #capture {
        height: 360px;
        width: 480px;
        overflow: hidden;
        float: left;
        background-color: #ECECFB;
        border: thin solid #333;
        border-left: none;
        }
        </style>
    </head>
    <body>
        <div id="map"></div>
        <div id="capture"></div>
        <script>
        var map;
        var src = 'https://developers.google.com/maps/documentation/javascript/examples/kml/westcampus.kml';

        function initMap() {
            map = new google.maps.Map(document.getElementById('map'), {
            center: new google.maps.LatLng(11.5708174, 104.938638),
            zoom: 2,
            mapTypeId: 'terrain'
            });

            var kmlLayer = new google.maps.KmlLayer(src, {
            suppressInfoWindows: true,
            preserveViewport: false,
            map: map
            });
            kmlLayer.addListener('click', function(event) {
            var content = event.featureData.infoWindowHtml;
            var testimonial = document.getElementById('capture');
            testimonial.innerHTML = content;
            });
        }
        </script>
        <script async
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAMUcSJr7R-FTwCXyKXLKGYc-vwQsu1l5A&callback=initMap">
        </script>
    </body>
    </html>
    HTML;
    
    
   
    return $html;
    }	
      
    
     protected function grid()
     {
        

     }
     



  





    
       
            
        
       
        
       


        
   

}
