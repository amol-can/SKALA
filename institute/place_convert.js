

function drawChart() {
   // Define the chart to be drawn.
   var jsonData = $.ajax({
            url: "place_convert_data.php",
            dataType: "json",
            async: false
            }).responseText;

   var parsed = JSON.parse(jsonData);
      var arr = [];
      var arr2 = [];


      arr.push("State");
      arr.push("Placed");
      arr.push("Converts");
      arr.push("NotConverts");
       arr2.push(arr);
      
       arr=[];
      for(var x of parsed){
       // console.log(x.label)
       arr.push(x.State);
       arr.push(Number(x.placed));
       arr.push(Number(x.converts));
       arr.push(Number(x.notconverts));
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
          width: 900,
          height: 320,
          linewidth: 10,
          areaOpacity: 1,
           
          axes: {
            x: {
              0: {side: 'bottom'}
            }
          }
        };


   // Instantiate and draw the chart.
   //chart.draw(data, options);
   var chart = new google.charts.Bar(document.getElementById('columnchart_material'));
        chart.draw(data, google.charts.Bar.convertOptions(options));
}
google.charts.setOnLoadCallback(drawChart);

  $("#dropdown").change(function() {
 var value= $('option:selected', this).text();
 var url="place_convert_data.php?State="+value;
var res=encodeURI(url);
console.log(res)
    var jsonData = $.ajax({
            url: res,
            dataType: "json",
            async: false
            }).responseText;

console.log(data);
  var parsed = JSON.parse(jsonData);
  console.log(parsed)
      var arr = [];
      var arr2 = [];


      arr.push("State");
      arr.push("Placed");
      arr.push("Converts");
      arr.push("NotConverts");
       arr2.push(arr);
      
       arr=[];
      for(var x of parsed){
       // console.log(x.label)
       arr.push(x.State);
       arr.push(Number(x.placed));
       arr.push(Number(x.converts));
       arr.push(Number(x.notconverts));
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
          width: 900,
          height: 320,
          linewidth: 10,
          areaOpacity: 1,
           
          axes: {
            x: {
              0: {side: 'bottom'}
            }
          }
        };


   // Instantiate and draw the chart.
   //chart.draw(data, options);
   var chart = new google.charts.Bar(document.getElementById('columnchart_material'));

        chart.draw(data, google.charts.Bar.convertOptions(options));



})
   // })


