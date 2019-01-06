
		var randomScalingFactor = function() {
			return Math.round(Math.random() * 100);
		};

		var config = {
			type: 'doughnut',
			data: {
				datasets: [{
					data: [
						10,
						20,
						50,
					],
					backgroundColor: [
                    rgba(255,51,0,1),
					rgba(255,153,51,1),
					rgba(102,204,51,1),
                    ],
					label: 'Dataset 1'
				}],
				labels: [
					'Red',
					'Orange',
					'Green',
				]
			},
			options: {
				responsive: true,
				legend: {
					position: 'top',
				},
				title: {
					display: true,
					text: 'Chart.js Doughnut Chart'
				},
				animation: {
					animateScale: true,
					animateRotate: true
				}
			}
		};

		window.onload = function() {
			var ctx = document.getElementById('chart-area').getContext('2d');
			window.myDoughnut = new Chart(ctx, config);
		};
