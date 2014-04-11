<?php

class CityController{
    public function handleRequest(){

        // Fetch all the cities:
        $cities = City::find();

        render('cities',array(
            'cities'=> $cities
        ));
    }
}

?>