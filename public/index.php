<?php

define("DS",DIRECTORY_SEPARATOR);
define("ROOT",dirname(__DIR__));
define('APP', ROOT.DS."app");
define('CONTROLLERS', APP.DS."controllers".DS);
define('MODELS', APP.DS."models".DS);
define('VIEWS', APP.DS."views".DS);
define('CORE', APP.DS."core".DS);
define('VENDOR', ROOT.DS."vendor".DS);
define('URL', "http://localhost/mvc/public");

define('DSN', 'mysql:host=localhost;dbname=cms');
define('DB_USER', 'root');
define('DB_PASS', '');



require_once VENDOR."autoload.php";

$app = new itrax\core\app();










