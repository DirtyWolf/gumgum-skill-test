<?php render('_header')?>
		
		<script type='text/javascript' src='https://www.google.com/jsapi'></script>
		<script type='text/javascript'>
			google.load('visualization', '1', {'packages': ['geomap']});
			google.setOnLoadCallback(drawMap);
			
			function drawMap() {
				var data = google.visualization.arrayToDataTable([
					['City', 'Temperature (C)'],
					<?php  
						foreach ($cities as $city) { ?>
							['<?php echo ($city->city) ?>', <?php echo ($city->temp) ?>],
						<?php }
					?>
				]);
				
				var options = {};
				options['colors'] = [0x00E3E3, 0xFF2200]; //orange colors
				options['dataMode'] = 'markers';
				options['width'] = '960px';
				options['height'] = '500px';
				
				var container = document.getElementById('map_canvas');
				var geomap = new google.visualization.GeoMap(container);
				geomap.draw(data, options);
			};
		
		</script>
		
		
		
		<div id='map_canvas'></div>

<?php render('_footer')?>