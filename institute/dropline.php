<html>
<head>
<title>Google Charts Tutorial</title>
   <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
   <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
   <script type="text/javascript">
     google.charts.load('current', {'packages':['line']});
      
   </script>


</head>


<script language="JavaScript">
function drawChart() {
   // Define the chart to be drawn.
   var jsonData = $.ajax({
            url: "droplinedata.php",
            dataType: "json",
            async: false
            }).responseText;

   var parsed = JSON.parse(jsonData);
      var arr = [];
      var arr2 = [];


      arr.push("Month");
      arr.push("Total");
      arr.push("Dropout");
       arr2.push(arr);
      
       arr=[];
      for(var x of parsed){
       // console.log(x.label)
       arr.push(x.Month);
       arr.push(Number(x.Total));
       arr.push(Number(x.Dropout));
       arr2.push(arr);
       arr=[];
      }
      console.log(arr2);
   var data = google.visualization.arrayToDataTable(arr2);

     var options = {
          chart: {
            /*title: 'Dropout Analysis',
            subtitle: 'Month wise'*/
          },
          /*width: 900,*/
          height: 300,
          linewidth: 10,
          areaOpacity: 1,
           
          axes: {
            x: {
              0: {side: 'top'}
            }
          }
        };


   // Instantiate and draw the chart.
   //chart.draw(data, options);
   var chart = new google.charts.Line(document.getElementById('line_top_x'));
      chart.draw(data, google.charts.Line.convertOptions(options));
}
google.charts.setOnLoadCallback(drawChart);
</script>
<body>
	<div id="line_top_x"></div>
</body>
</html>




