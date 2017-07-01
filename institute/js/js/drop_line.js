$(document).ready(function(){
	$.ajax({
		url : "http://localhost/skala/institute/drop.php",
		type : "GET",
		success : function(data){
			console.log(data);

			var count = [];
			var enr_date = [];

			var num=[];
			

			for(var i in data) {
				
				count.push(data[i].count);
				enr_date.push(data[i].enr_date);

				num.push(data[i].num);
				


				
			}

			var chartdata = {
				labels: enr_date,
				datasets: [
					{
						label: "Enrolled Count",
						fill: true,
						lineTension: 0.1,
						backgroundColor: "rgba(59, 89, 152, 0.75)",
						borderColor: "rgba(59, 89, 152, 1)",
						pointHoverBackgroundColor: "rgba(59, 89, 152, 1)",
						pointHoverBorderColor: "rgba(59, 89, 152, 1)",
						data: count
					},

					{
						label: "Dropout Prediction",
						fill: true,
						lineTension: 0.1,
						backgroundColor: "rgba(211, 72, 54, 0.75)",
						borderColor: "rgba(211, 72, 54, 1)",
						pointHoverBackgroundColor: "rgba(211, 72, 54, 1)",
						pointHoverBorderColor: "rgba(211, 72, 54, 1)",
						data: num
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