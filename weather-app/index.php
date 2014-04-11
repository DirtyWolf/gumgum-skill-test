<?php

require_once "app/main.php";

try {

	if($_GET['cities']=="select"){
		$c = new CityController();
	}
	else if(empty($_GET)){
		$c = new HomeController();
	}
	else throw new Exception('Wrong page!');
	
	$c->handleRequest();
}
catch(Exception $e) {
	render('error',array('message'=>$e->getMessage()));
}

?>