$(document).ready(function(){
	$.ajax({
		url : "http://localhost/skala/institute/data.php",
		type : "GET",
		success : function(data){
			console.log(data);

			var final_score = [];
			var course_name = [];
			

			for(var i in data) {
				
				final_score.push(data[i].final_score);
				course_name.push(data[i].course_name);
							
			}

			var chartdata = {
				labels: course_name,
				datasets: [
					{
						label: "Rating of Course",
						fill: false,
						lineTension: 0.1,
						backgroundColor: "rgba(59, 89, 152, 0.75)",
						borderColor: "rgba(59, 89, 152, 1)",
						pointHoverBackgroundColor: "rgba(59, 89, 152, 1)",
						pointHoverBorderColor: "rgba(59, 89, 152, 1)",
						data: final_score
					},
				
				
					
				]
			};

			var ctx = $("#mycanvas");

			var LineGraph = new Chart(ctx, {
				type: 'line',
				data: chartdata
			});
		},
		error : function(data) {

		}
	});
});