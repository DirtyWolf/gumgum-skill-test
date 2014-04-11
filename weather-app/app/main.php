<?php

require_once "app/config.php";
require_once "app/db.php";
require_once "app/helpers.php";
require_once "app/models/city.model.php";
require_once "app/controllers/city.controller.php";
require_once "app/controllers/home.controller.php";


// Cache

/*header('Cache-Control: max-age=3600, public');
header('Pragma: cache');
header("Last-Modified: ".gmdate("D, d M Y H:i:s",time())." GMT");
header("Expires: ".gmdate("D, d M Y H:i:s",time()+3600)." GMT");*/

?>