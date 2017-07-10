
<?php require 'include/config.php';?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Heatmaps</title>
    <style>
      /* Always set the map height explicitly to define the size of the div
       * element that contains the map. */
      #map {
        height: 350px;
      }
      /* Optional: Makes the sample page fill the window. */
      html, body {
        height: 350px;
        margin: 0;
        padding: 0;
      }
      
    </style>
  </head>

  <body>
    <div>
      <button onclick="changeGradient()">Change Color</button>
      <button onclick="changeRadius()">Change radius</button>
      <button onclick="changeOpacity()">Change opacity</button>
    </div>
    <div id="map"></div>
    <script>

      // This example requires the Visualization library. Include the libraries=visualization
      // parameter when you first load the API. For example:
      // <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&libraries=visualization">

      var map, heatmap;

      function initMap1() {
        map = new google.maps.Map(document.getElementById('map'), {
          zoom: 5,
          center: {lat: 23.259933, lng: 77.412615},
          mapTypeId: 'hybrid'
        });

        heatmap = new google.maps.visualization.HeatmapLayer({
          data: getPoints(),
          map: map
        });
      }

      function changeGradient() {
        var gradient = [
          'rgba(0, 255, 255, 0)',
          'rgba(0, 255, 255, 1)',
          'rgba(0, 191, 255, 1)',
          'rgba(0, 127, 255, 1)',
          'rgba(0, 63, 255, 1)',
          'rgba(0, 0, 255, 1)',
          'rgba(0, 0, 223, 1)',
          'rgba(0, 0, 191, 1)',
          'rgba(0, 0, 159, 1)',
          'rgba(0, 0, 127, 1)',
          'rgba(63, 0, 91, 1)',
          'rgba(127, 0, 63, 1)',
          'rgba(191, 0, 31, 1)',
          'rgba(255, 0, 0, 1)'
        ]
        heatmap.set('gradient', heatmap.get('gradient') ? null : gradient);
      }

      function changeRadius() {
        heatmap.set('radius', heatmap.get('radius') ? null : 20);
      }

      function changeOpacity() {
        heatmap.set('opacity', heatmap.get('opacity') ? null : 10);
      }

      // Heatmap data: 500 Points
      function getPoints() {
return [
        <?php
        
       
        $conn = new mysqli($servername, $username, $password, $dbName);
        if ($conn->connect_error) {
          die("Connection failed: " . $conn->connect_error);
        }
        $query = "SELECT * FROM distance WHERE Latitude IS NOT NUll AND Latitude !=''  ";
        $result = $conn->query($query); 
        if ($result->num_rows > 0){
          while($row = $result->fetch_assoc()) {      

        echo "new google.maps.LatLng(".$row["Latitude"]."," .$row["Longitude"]."),";
          }
        } 
          
        
        ?>];
      }

    </script>
    
  </body>
  <script async defer
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDPmQncFFGdKhM-ISVzaNlfxaV2_JXMsdg&libraries=visualization&callback=initMap1">
    </script>
</html>