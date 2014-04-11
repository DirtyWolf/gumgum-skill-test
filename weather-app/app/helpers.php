<?php

function render($template,$vars = array()){

	extract($vars);
	
	if(is_array($template)){
	
		foreach($template as $k){
			
			$cl = strtolower(get_class($k));
			$$cl = $k;
			
			include "app/views/_$cl.php";
		}
		
	}
	else {
		include "app/views/$template.php";
	}
}

?>