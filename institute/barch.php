<?php
 $con = mysqli_connect('localhost','root','','skala');
?>
<!DOCTYPE HTML>
<html>
<head>
 <meta charset="utf-8">
 <title>
 Enrolled And Dropout Analysis
 </title>
 <script type="text/javascript" src="https://www.google.com/jsapi"></script>
 
 <script type="text/javascript">
 google.load('visualization', '1', {packages: ['corechart', 'bar']});
 google.setOnLoadCallback(drawMaterial);

 function drawMaterial() {
 var data = google.visualization.arrayToDataTable([
 ['Institute', 'Enrolled', 'Dropout'],

 <?php 
 $query = "SELECT count(Enroll_Count) AS count, Institute FROM dropout_dashboard GROUP BY Institute order by count DESC";
 $exec = mysqli_query($con,$query);
 while($row = mysqli_fetch_array($exec)){

 echo "['".$row['Institute']."',";
 $query2 = "SELECT count(Enroll_Count) AS count FROM dropout_dashboard WHERE Institute='".$row['Institute']."' ";
 $exec2 = mysqli_query($con,$query2);
 $row2 = mysqli_fetch_assoc($exec2); 
 echo $row2['count'];
 
 $query3 = "SELECT count(Drop_Count) AS num FROM dropout_dashboard WHERE Drop_Count='1' And Institute='".$row['Institute']."' ";
 $exec3 = mysqli_query($con,$query3);
 $row3 = mysqli_fetch_assoc($exec3); 
 echo ",".$row3['num']."],";
 }
 ?>
 ]);

 var prop = {
 
 title: 'Institute Wise Dropout',
 
 bars: 'horizontal'
 };
 var material = new google.charts.Bar(document.getElementById('barchart'));
 material.draw(data, prop);
 }
 </script>
</head>
<body>
 <h3>Enrolled And Dropout Analysis</h3>
 <div id="barchart" style="width: 900px; height: 500px;"></div>
</body>
</html>