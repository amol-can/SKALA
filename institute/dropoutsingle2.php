<html>
<head>
<title>Google Charts Tutorial</title>
   
</head>


<script language="JavaScript">
function drawChart() {
   // Define the chart to be drawn.
   var jsonData = $.ajax({
            url: "dropoutsingle2data.php",
            dataType: "json",
            async: false
            }).responseText;

   var parsed = JSON.parse(jsonData);
      var arr = [];
      var arr2 = [];

      arr.push("name");
      arr.push("dropout");
      arr.push("servived");
       arr2.push(arr);
      
       arr=[];
      for(var x of parsed){
       // console.log(x.label)
       arr.push(x.name);
       arr.push(Number(x.dropout));
       arr.push(Number(x.servived));
       arr2.push(arr);
       arr=[];
      }
      console.log(name);
   var data = google.visualization.arrayToDataTable(arr2);

   var options = {
      title: 'Dropout Analysis',
      isStacked:true	  
   };  

   // Instantiate and draw the chart.
   var chart = new google.visualization.ColumnChart(document.getElementById('container'));
   chart.draw(data, options);
}
google.charts.setOnLoadCallback(drawChart);
</script>
<body>
	<div id="container" style="width: 400; height: 600"></div>
</body>
</html>

