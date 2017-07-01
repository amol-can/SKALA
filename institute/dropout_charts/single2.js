function drawChart() {
   // Define the chart to be drawn.
   var jsonData = $.ajax({
            url: "single2data.php",
            dataType: "json",
            async: false
            }).responseText;

   var parsed = JSON.parse(jsonData);
      var arr = [];
      var arr2 = [];

      arr.push("name");      
      arr.push("servived");
      arr.push("dropout");
       
      
       arr=[];
      for(var x of parsed){
       // console.log(x.label)
       arr.push(x.name);      
       arr.push(Number(x.servived));
        arr.push(Number(x.dropout));
       arr2.push(arr);
       arr=[];
      }
      /*console.log(arr2);*/
   var data = google.visualization.arrayToDataTable(arr2,true);

   var options = {
      /*title: 'Dropout Analysis',*/
      isStacked:true	  
   };  

   // Instantiate and draw the chart.
   var chart = new google.visualization.ColumnChart(document.getElementById('container'));
   chart.draw(data, options);
}
google.charts.setOnLoadCallback(drawChart);

 $("#dropdown2").change(function() {
 var value= $('option:selected', this).text();
 var url="single2data.php?Institute="+value;
var res=encodeURI(url);

    var jsonData = $.ajax({
            url: res,
            dataType: "json",
            async: false
            }).responseText;
    console.log(jsonData)
    var parsed = JSON.parse(jsonData);
      var arr = [];
      var arr2 = [];

      arr.push("name");      
      arr.push("servived");
      arr.push("dropout");
       
      
       arr=[];
      for(var x of parsed){
       // console.log(x.label)
       arr.push(x.name);      
       arr.push(Number(x.servived));
        arr.push(Number(x.dropout));
       arr2.push(arr);
       arr=[];
      }
      console.log(arr2);
   var data = google.visualization.arrayToDataTable(arr2,true);

   var options = {
      /*title: 'Dropout Analysis',*/
      isStacked:true    
   };  

   // Instantiate and draw the chart.
   var chart = new google.visualization.ColumnChart(document.getElementById('container'));
   chart.draw(data, options);
})