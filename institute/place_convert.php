<?php
    include 'include/config.php';
    $query = "SELECT DISTINCT State from dropout_dashboard where State IS NOT NULL";
    $result = $conn->query($query);

?>

<html>
<head>
<title>Line chart</title>
   <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
   <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
   <script type="text/javascript">
   google.charts.load('current', {'packages':['bar']});
   google.charts.setOnLoadCallback(drawChart);  
   </script>


</head>



<body>

  <select id="dropdown" class="dropdown-content" >
            <option>All States</option>
            <?php

                while($row=mysqli_fetch_array( $result)) {
                  echo "<option value=".$row['State'].">";
                  echo $row['State'];
                   echo "</option>";

                
                  }
                

            ?>
</select>
  <script src="place_convert.js"></script>
	<div id="columnchart_material"></div>
</body>

</html>



