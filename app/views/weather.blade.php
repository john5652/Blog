<!DOCTYPE html>
<html>
<head>
	<title>Weather</title>
	 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
</head>
<body>

	<style type="text/css">

.weatherApp {
	
	color: darkblue;
	border: 2px solid black;
	width: 400px;
	height: 220px;
	text-align: center;
	background-color: lightblue;
	display: inline-block;
	margin-left: 15px;
	margin-right: 15px;
}

body {
	background-color: lightgreen;
}

#map-canvas {
  width: 1400px;
  height: 380px;
  margin-left: 15px;
  margin-top: 15px;
  margin-bottom: 15px;
}
	</style>
	
	<h1>Weather APP</h1>

	<h3>San Antonio</h3>
	<div id="weather" class='weatherApp'></div>
	<div id="weather2" class='weatherApp'></div>
	<div id="weather3" class='weatherApp'></div>


	

	<div id="map-canvas"></div>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD78_rOG7OiSPOM0mfCpeROI81YpH2z2Rc"></script>

	<script src="//code.jquery.com/jquery-1.11.3.min.js"> </script>
	
	<script type="text/javascript">

var newLat= ""
var newLng= ""

		var ajaxRequest = $.get("http://api.openweathermap.org/data/2.5/forecast/daily", {
    		APPID: "444c957d363d5c10e41a0883ed6ab6de",
    		lat:    newLat,
    		lon:   newLng,
    		units: "imperial",
    		cnt: '3'
		});

		ajaxRequest.always(function(){
			console.log('request sent');
		});

		ajaxRequest.fail(function(data, error){
			console.log(error);
			console.log(ajaxRequest.status);
		});

		ajaxRequest.done(function(data){
			console.log (data);
    		var htmlString = "";

    		htmlString += '<p>' + data.list[0].temp.min + ' / ' + data.list[0].temp.max + '</p>'
        		   + '<p>' + data.list[0].weather[0].main + ': ' + data.list[0].weather[0].description +'</p>'
        		   + '<p><img src=\"http://openweathermap.org/img/w/' + data.list[0].weather[0].icon + '.png\"></p>'
        		   + '<p>' + 'Humidity: ' + data.list[0].humidity + '</p>'
        		   + '<p>' + 'Wind: ' + data.list[0].speed + ' mph' + '</p>'
        		   + '<p>' + 'Pressure: ' + data.list[0].pressure + '</p>'
    
		    $('#weather').html(htmlString);


		    htmlString = '<p>' + data.list[1].temp.min + ' / ' + data.list[1].temp.max + '</p>'
		        		   + '<p>' + data.list[1].weather[0].main + ": " + data.list[1].weather[0].description + '</p>'
		        		   + '<p><img src=\"http://openweathermap.org/img/w/' + data.list[1].weather[0].icon + '.png\"></p>'
		        		   + '<p>' + 'Humidity: ' + data.list[1].humidity + '</p>'
		        		   + '<p>' + 'Wind: ' + data.list[1].speed + ' mph' + '</p>'
		        		   + '<p>' + 'Pressure: ' + data.list[1].pressure + '</p>'
		    
		    $('#weather2').html(htmlString);

		    
		    htmlString = '<p>' + data.list[2].temp.min + ' / ' + data.list[2].temp.max + '</p>'
		        		   + '<p>' + data.list[2].weather[0].main + ": " + data.list[2].weather[0].description +'</p>'
		        		   + '<p><img src=\"http://openweathermap.org/img/w/' + data.list[2].weather[0].icon + '.png\"></p>'
		        		   + '<p>' + 'Humidity: ' + data.list[2].humidity + '</p>'
		        		   + '<p>' + 'Wind: ' + data.list[2].speed + ' mph' + '</p>'
		        		   + '<p>' + 'Pressure: ' + data.list[2].pressure + '</p>'
		    
		    $('#weather3').html(htmlString);


 	  var address = "3147 SE Military Dr San Antonio, TX"
      console.log (address);

      var geocoder = new google.maps.Geocoder();

   	  geocoder.geocode( { 'address': address}, function(results, status) {
  
      if (status == google.maps.GeocoderStatus.OK) {
      var mapOptions = {
      zoom: 5,
      center: results[0].geometry.location,
      }
      var map = new google.maps.Map(document.getElementById("map-canvas"), mapOptions);
  	  }   else {
      alert("Geocoding was not successful - STATUS: " + status);
      }
     
      var johnnys = { lat: 29.352357, lng: -98.4382 };
      var marker = new google.maps.Marker({
      position: johnnys,
      map: map,
      draggable:true, 
      title:"Drag"

      });

      var newLat=  google.maps.event.addListener(marker, 'dragend', function(event) {
      console.log(this.getPosition().lat());
      lattitude=(this.getPosition().lat());
	  });

      var newLng =  google.maps.event.addListener(marker, 'dragend', function(event) {
      console.log(this.getPosition().lng());
      longitude=(this.getPosition().lng());
	  });
    
   });
});
	</script>

</body>
</html>