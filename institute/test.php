<?php

/* Include the `include/fusioncharts.php` file that contains functions to embed the charts.*/

include("include/fusioncharts.php");

/* The following 4 code lines contains the database connection information. Alternatively, you can move these code lines to a separate file and include the file here. You can also modify this code based on your database connection.   */

$hostdb = "localhost";  // MySQl host
$userdb = "root";  // MySQL username
$passdb = "";  // MySQL password
$namedb = "skala";  // MySQL database name

// Establish a connection to the database
$dbhandle = new mysqli($hostdb, $userdb, $passdb, $namedb);

/*Render an error message, to avoid abrupt failure, if the database connection parameters are incorrect */
if ($dbhandle->connect_error) {
  exit("There was an error with your connection: ".$dbhandle->connect_error);
}
?>

    <html>

    <head>
        <title>FusionCharts | Multi-Series Chart using PHP and MySQL</title>
        <script src="http://static.fusioncharts.com/code/latest/fusioncharts.js"></script>
        <script src="http://static.fusioncharts.com/code/latest/fusioncharts.charts.js"></script>
        <script src="http://static.fusioncharts.com/code/latest/themes/fusioncharts.theme.zune.js"></script>
    </head>

    <body>

        <?php

        $strQuery = "SELECT COUNT('user_id') as count, enr_date,family_member,working_member FROM dropout WHERE enr_date BETWEEN '2016-04-01' AND '2016-04-28'  GROUP BY enr_date; ";
  $result = $dbhandle->query($strQuery) or exit("Error code ({$dbhandle->errno}): {$dbhandle->error}");
  if ($result) {

  $arrData = array(
        "chart" => array(
            "caption"=> "Dropout analysis",
            "subCaption"=> "Sales analysis of last year",
            "xAxisname"=> "Days",
            "yAxisName"=> "Number of Student",
            "numberPrefix"=> "$",
            "legendItemFontColor"=> "#666666",
            "theme"=> "zune"
            )
          );
          // creating array for categories object

          $enr_dateArray=array();
          $dataseries1=array();
          $dataseries2=array();
          $dataseries3=array();

          // pushing enr_date array values
          while($row = mysqli_fetch_array($result)) {
            array_push($enr_dateArray, array(
            "label" => $row["enr_date"]
          )
        );
        array_push($dataseries1, array(
          "value" => $row["count"]
          )
        );

       

      }

      $arrData["categories"]=array(array("enr_date"=>$enr_dateArray));
      // creating dataset object
      $arrData["dataset"] = array(array("seriesName"=> "Actual Revenue", "data"=>$dataseries1));


      /*JSON Encode the data to retrieve the string containing the JSON representation of the data in the array. */
      $jsonEncodedData = json_encode($arrData);

      // chart object
      $msChart = new FusionCharts("skala", "chart1" , "600", "350", "chart-container", "json", $jsonEncodedData);

      // Render the chart
      $msChart->render();

      // closing db connection
      $dbhandle->close();

   }

?>

            <center>
                <div id="chart-container">Chart will render here!</div>
            </center>
    </body>

    </html>