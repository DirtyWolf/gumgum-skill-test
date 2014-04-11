<?php  
	
	/*
		Get the url contents and use json_decode to parse it as an array
	*/
	$url = 'http://api.worldbank.org/countries/USA/indicators/3.1_RE.CONSUMPTION?per_page=50&date=2000:2014&format=json';
	$content = file_get_contents($url);
	$json = json_decode($content, true);
	$array = array_reverse($json[1]); /* The array which contain the useful data is reversed and saved for easy calling */
?>

<!DOCTYPE html>
<html>
  <head>
  	<title>Data Visualization Test</title>
  	
  	<style>
  		#chart {
  			margin: 0 auto;
  		}
  	</style>
  	
    <script type="text/javascript" src="https://www.google.com/jsapi"></script>
    
    <script type="text/javascript">
      google.load("visualization", "1", {packages:["corechart"]});
      google.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Year', 'Energy Consumption', { role: 'style' }],
          <?php  
          	/*
          		Parse the array to show the year and energy consuption in the table.
          		The energy consuption is rounded to millions for easy reading.
          		Each bar is given a color depending on the value of energy consuption. 
          	*/
          	foreach ($array as $item) {
          		if ($item['value']) {
          			$year = $item['date'];
          			$value = round($item['value']/1000000,2);
          			$color = 'GreenYellow';
          			if($value>2.9 && $value<=3.6){
          				$color = 'gold';
          			} else if ($value>3.6 && $value<=4.3) {
						$color = 'orange';
					} else if ($value>4.3 && $value<=5.0) {
						$color = 'red';
					}
          			
          			echo "['".$year."',".$value.",'".$color."'],";
          		}
          	}
          ?>
        ]);

        var options = {
          title: 'Energy Consumption in the US in Millions',
          hAxis: {title: 'Year'},
          legend: { position: "none" }
        };

        var chart = new google.visualization.ColumnChart(document.getElementById('chart'));
        chart.draw(data, options);
      }
    </script>
    
  </head>
  <body>
    <div id="chart" style="width: 960px; height: 600px;"></div>
  </body>
</html>