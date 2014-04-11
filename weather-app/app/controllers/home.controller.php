<?php

class HomeController{
    public function handleRequest(){

        $cities = City::find(array(
        	'selected' => 1
        ));

        render('home', array(
        	'cities'=> $cities
        ));
    }
}

?>