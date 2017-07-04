<?php
		require 'include/config.php';

		//checking if there were any error during the last connection attempt
		if ($conn->connect_error) {
		  die("Connection failed: " . $conn->connect_error);
		}
		//the SQL query to be executed
		
		if (!isset($_GET) || empty($_GET))
		{
		    $query = "SELECT sum(Placed) as placed, sum(Converts) as converts, sum(NotConverts) as notconverts, State from dropout_dashboard GROUP BY State order BY notconverts DESC";
		}
		else

		{
		$iname=$_GET['State'];
		$query = "SELECT sum(Placed) as placed,sum(Converts) as converts, sum(NotConverts) as notconverts, State from dropout_dashboard where State='$iname' GROUP BY State order BY notconverts DESC";
		
		}
		
		$result = $conn->query($query);
		
		//initialize the array to store the processed data
		$jsonArray = array();
		

		//check if there is any data returned by the SQL Query
		if ($result->num_rows > 0) {
		  //Converting the results into an associative array
		  while($row = $result->fetch_assoc()) {
		    $jsonArrayItem = array();
		    $jsonArrayItem['State'] = $row['State'];
		    $jsonArrayItem['placed'] = $row['placed'];
		    $jsonArrayItem['converts'] = $row['converts'];
		    $jsonArrayItem['notconverts'] = $row['notconverts'];
		    

		    //append the above created object into the main array.
		    array_push($jsonArray, $jsonArrayItem);
		  }
		}

		

		//Closing the connection to DB
		$conn->close();
		//set the response content type as JSON
		header('Content-type: application/json');
		//output the return value of json encode using the echo function. 
	
		//$result3 = array_merge($jsonArray,$jsonArray2);
		/*usort($array,
        function($jsonArray, $jsonArray2) { return $jsonArray['date_created'] - $jsonArray2['date_created']; });*/

		echo json_encode($jsonArray);
	?>