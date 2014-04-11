<?php

class City {

    public static function find($arr = array()){
        global $db;

        if(empty($arr)){
            $st = $db->prepare("SELECT * FROM `weather`");
        }
        else if($arr['city']){
            $st = $db->prepare("SELECT * FROM `weather` WHERE `code`=:city");
        } 
        else if($arr['selected']) {
        	$st = $db->prepare("SELECT * FROM `weather` WHERE `select`=:selected");
        }
        else {
            throw new Exception("Unsupported property!");
        }
        
        $st->execute($arr);

        // Returns an array of Cities objects:
        return $st->fetchAll(PDO::FETCH_CLASS, "City");
    }
    
    public static function update($arr = array()) {
    	global $db;
    	
    	if(!empty($arr)){
    		$st = $db->prepare("UPDATE `weather` SET `temp`=:temp, `select`=:select WHERE `id`=:id");
    	} else {
    	    throw new Exception("Unsupported property!");
    	}
    	
    	$st->execute($arr);
    	
    	return $st;
    }
    
    public static function setZero($arr = array()) {
    	global $db;
    	
    	if(!empty($arr)){
    		$st = $db->prepare("UPDATE `weather` SET `select`=:select");
    	} else {
    	    throw new Exception("Unsupported property!");
    	}
    	
    	$st->execute($arr);
    	
    	return false;
    }
}

?>