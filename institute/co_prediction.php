<?php
    include 'include/config.php';
    $query = "SELECT DISTINCT center_name from co_prediction where center_name IS NOT NULL";
    $result = $conn->query($query);

?>

<html>
<head>
<title>Line chart</title>
   <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
   <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
  


</head>



<body>

  <select id="dropdown3">
                <option>All Institutes</option>
            <?php

                while($row=mysqli_fetch_array( $result)) {
                  echo "<option value=".$row['center_name'].">";
                  echo $row['center_name'];
                   echo "</option>";

                
                  }
                

            ?>
</select>
  
	<div id="container1" style="width: 100%; height: 385px; overflow-x: scroll; overflow-y: scroll;" ></div>
</body>
 <script type="text/javascript">
   google.charts.load('current', {'packages':['bar']});
  
   </script>
   <script src="http://localhost/skala/institute/co_prediction/co_prediction.js"></script>
   <script type=" text/javascript"> google.charts.setOnLoadCallback(drawChart);  </script>
</html>



