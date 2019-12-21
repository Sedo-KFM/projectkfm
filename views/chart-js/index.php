<?php
	$this-> title = 'My first chart';
$script = <<< JS
	var speedCanvas = document.getElementById("speedChart");

	Chart.defaults.global.defaultFontFamily = "Lato";
	Chart.defaults.global.defaultFontSize = 18;

	var dataFirst = {
	    label: "Car A - Speed (mph)",
	    data: [0, 59, 75, 20, 20, 55, 40],
	    lineTension: 0,
	    fill: false,
	    borderColor: 'red'
	  };

	var dataSecond = {
	    label: "Car B - Speed (mph)",
	    data: [20, 15, 60, 60, 65, 30, 70],
	    lineTension: 0,
	    fill: false,
	  borderColor: 'blue'
	  };

	var speedData = {
	  labels: ["0s", "10s", "20s", "30s", "40s", "50s", "60s"],
	  datasets: [dataFirst, dataSecond]
	};

	var chartOptions = {
	  legend: {
	    display: true,
	    position: 'top',
	    labels: {
	      boxWidth: 80,
	      fontColor: 'black'
	    }
	  }
	};

	var lineChart = new Chart(speedCanvas, {
	  type: 'line',
	  data: speedData,
	  options: chartOptions
	});
	



	var densityCanvas = document.getElementById("densityChart");

	Chart.defaults.global.defaultFontFamily = "Lato";
	Chart.defaults.global.defaultFontSize = 18;

	var densityData = {
	  label: 'Кол-во отчисленных',
	  data: [5122, 1193, 228, 100, 89],
	  backgroundColor: [
	    'rgba(0, 99, 132, 0.6)',
	    'rgba(30, 99, 132, 0.6)',
	    'rgba(60, 99, 132, 0.6)',
	    'rgba(90, 99, 132, 0.6)',
	    'rgba(120, 99, 132, 0.6)'
	  ],
	  borderColor: [
	    'rgba(0, 99, 132, 1)',
	    'rgba(30, 99, 132, 1)',
	    'rgba(60, 99, 132, 1)',
	    'rgba(90, 99, 132, 1)',
	    'rgba(120, 99, 132, 1)'
	  ],
	  borderWidth: 2,
	  hoverBorderWidth: 0
	};

	var chartOptions = {
	  scales: {
	    yAxes: [{
	      barPercentage: 0.5
	    }]
	  },
	  elements: {
	    rectangle: {
	      borderSkipped: 'left',
	    }
	  }
	};

	var barChart = new Chart(densityCanvas, {
	  type: 'horizontalBar',
	  data: {
	    labels: ["С окончанием", "С академической неуспеваемостью", "С отчислением по собственному желанию", "По невыполнению обр. обязанностей", "С переводом в др. обр. организацию"],
	    datasets: [densityData],
	  },
	  options: chartOptions
	});
JS;
$this->registerJs($script, yii\web\View::POS_READY);
?>
<div id="my-chart">
	<h1><?= $this->title ?></h1>
	<canvas id="speedChart" width="600" height="400"></canvas>
	<br><br>
	<canvas id="densityChart" width="600" height="400"></canvas>
</div>