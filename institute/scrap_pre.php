<?php
    include 'include/config.php';
    $query = "SELECT DISTINCT location from scrap_pre where location IS NOT NULL";
    $result1 = $conn->query($query);
?>

<html>
<head>
<title>Line chart</title>
   <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
   <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
  


</head>


<body>

  <select id="dropdown4">
                <option>Nasik</option>
            <?php

                while($row=mysqli_fetch_array( $result1)) {
                  echo "<option value=".$row['location'].">";
                  echo $row['location'];
                   echo "</option>";

                
                  }
                

            ?>
</select>
  
	<div id="container2" style="width: 100%; height: 385px; overflow-x: scroll; overflow-y: scroll;" ></div>
</body>
 <script type="text/javascript">
   google.charts.load('current', {'packages':['bar']});
  
   </script>
   <script src="http://localhost/skala/institute/co_prediction/scrap_pre.js"></script>
   <script type=" text/javascript"> google.charts.setOnLoadCallback(drawChart);  </script>
</html>



