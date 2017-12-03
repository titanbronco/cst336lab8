<!DOCTYPE html>
<html>
  <head>
    <style>
       #map {
        height: 400px;
        width: 100%;
       }
    </style>
  </head>
  <body>
    <h3>My Google Maps Demo</h3>
    <div id="map"></div>
    <script>
      function initMap() {
        var uluru = {lat: -50.363, lng: 31.044};
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 4,
          center: uluru
        });
        var marker = new google.maps.Marker({
          position: uluru,
          map: map
        });
      }
    </script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDFOjxJ23DfYRLTqEuNsgnqwP0E79Aybpk&callback=initMap">
    </script>
    
    <form>
        <input id="lat" onchange="initMap();" type="text"><br>
        <input id="long" onchange="initMap();" type="text"><br>
    </form>
  </body>
</html>