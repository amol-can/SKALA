<?php
		include '../include/config.php';
		header('Access-Control-Allow-Origin: *');
		//checking if there were any error during the last connection attempt
		if ($conn->connect_error) {
		  die("Connection failed: " . $conn->connect_error);
		}
		//the SQL query to be executed
		if (empty($_GET['center_name']))
		{
		    $query = "SELECT final_score, course_name FROM demanding_courses GROUP BY course_name ORDER BY final_score DESC";
		    $result = $conn->query($query);
		}
		else
		{
		
		$iname3=$_GET['center_name'];
		$query = "SELECT final_score, course_name FROM demanding_courses where center_name='$iname3' GROUP BY course_name ORDER BY final_score DESC";
		$result = $conn->query($query);
		
		}
		//storing the result of the executed query
		//$result = $conn->query($query);
		//initialize the array to store the processed data
		$jsonArray = array();
		//check if there is any data returned by the SQL Query
		if ($result->num_rows > 0) {
		  //Converting the results into an associative array
		  while($row = $result->fetch_assoc()) {
		    $jsonArrayItem = array();
		    $jsonArrayItem['label'] = $row['course_name'];
		    $jsonArrayItem['value'] = $row['final_score'];
		    //append the above created object into the main array.
		    array_push($jsonArray, $jsonArrayItem);
		  }
		}
		//Closing the connection to DB
		$conn->close();
		//set the response content type as JSON
		header('Content-type: application/json');
		//output the return value of json encode using the echo function. 
		echo json_encode($jsonArray);
	?>