<?php

	require_once "config.php";
	require_once "db.php";
	require_once "models/city.model.php";
	
	$selected = explode(",",$_GET['cities']);
	
	City::setZero(array( 'select' => 0 ));
	
	foreach ($selected as $select) {
		$cities = City::find(array('city'=>$select));
		
		foreach ($cities as $city) {
			$url = 'http://api.openweathermap.org/data/2.5/weather?lat='.$city->lat.'&lon='.$city->lon.'&units=metric';
			$content = file_get_contents($url);
			$json = json_decode($content, true);
			$temp = $json['main']['temp'];
			
			City::update(array(
				'id'     => $city->id,
				'temp'   => $temp,
				'select' => 1
			));
		}
		
	}
	
	echo('Cities Updated on '. date('Y/F/d h:i:s'));

?>