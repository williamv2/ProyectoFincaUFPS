$(document).ready(function(){
	$.ajax({
		url: "../php/datoschart.php",
		method: "GET",
		success: function(data) {
			console.log(data);
			var nombre = [];
			var numanimal = [];

			for(var i in data) {
				nombre.push(data[i].nombre);
				numanimal.push(data[i].numAnimales);
			}

			var chartdata = {
				labels: nombre,
				datasets : [
					{
						label: 'Num. Animales',
						backgroundColor: 'rgba(255, 106, 105, 0.75)',
						borderColor: 'rgba(200, 200, 200, 0.75)',
						hoverBackgroundColor: 'rgba(200, 250, 200, 1)',
						hoverBorderColor: 'rgba(200, 200, 200, 1)',
						data: numanimal
					}
				]
			};

			var ctx = $("#mycanvas");

			var barGraph = new Chart(ctx, {
				type: 'bar',
				data: chartdata
			});
		},
		error: function(data) {
			console.log(data);
		}
	});
});