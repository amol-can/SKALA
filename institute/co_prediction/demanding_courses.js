function drawChart1() {
   // Define the chart to be drawn.
   var jsonData = $.ajax({
            url: "http://localhost/skala/institute/co_prediction/demanding_courses_data.php",
            dataType: "json",
            async: false
            }).responseText;
   console.log(jsonData);
   var parsed = JSON.parse(jsonData);
   
      var arr = [];
      var arr2 = [];

      arr.push("label");      
      arr.push("value");
      
      
       arr=[];
      for(var x of parsed){
       /*console.log(x)*/
       arr.push(x.label);      
       arr.push(Number(x.value));
       /*console.log(x.value);*/
       arr2.push(arr);
       arr=[];
      }
      /*console.log(arr2);*/
   var data = google.visualization.arrayToDataTable(arr2,true);
/*console.log(arr2);*/
      
   var options = {
      /*title: 'Dropout Analysis',*/
      isStacked:'percent',
      colors: ['#17BFA5'],

      legend: { position: 'none' },
          /*chart: { title: 'Chess opening moves',
                   subtitle: 'popularity by percentage' },*/
          bars: 'horizontal', // Required for Material Bar Charts.
          axes: {
            x: {
              0: { side: 'top', label: 'Percentage'} // Top x-axis.
            }
          },
          bar: { groupWidth: "90%" }

   };  

   // Instantiate and draw the chart.
   var chart = new google.charts.Bar(document.getElementById('container2'));
   
   chart.draw(data, options);
}

google.charts.setOnLoadCallback(drawChart1);

 $("#dropdown3").change(function() {
 var value1= $('option:selected', this).text();
 var url="http://localhost/skala/institute/co_prediction/demanding_courses_data.php?center_name="+value1;
var res=encodeURI(url);
console.log(res);
    var jsonData = $.ajax({
            url: res,
            dataType: "json",
            async: false
            }).responseText;
    console.log(jsonData)
    var parsed = JSON.parse(jsonData);
      var arr = [];
      var arr2 = [];
      
      arr.push("label");      
      arr.push("value");      
       
       
       arr=[];
      for(var x of parsed){
       // console.log(x.label)
       arr.push(x.label);      
       arr.push(Number(x.value));
        
       arr2.push(arr);
       arr=[];
      }
      console.log(arr2);
   var data = google.visualization.arrayToDataTable(arr2,true);

   var options = {
      /*title: 'Dropout Analysis',*/
      isStacked: 'percent',
      colors: ['#17BFA5'],

      legend: { position: 'none' },
          /*chart: { title: 'Chess opening moves',
                   subtitle: 'popularity by percentage' },*/
          bars: 'horizontal', // Required for Material Bar Charts.
          axes: {
            x: {
              0: { side: 'top', label: 'Percentage'} // Top x-axis.
            }
          },
          bar: { groupWidth: "90%" }



   };  

   // Instantiate and draw the chart.
   var chart = new google.charts.Bar(document.getElementById('container2'));
   chart.draw(data, options);
})