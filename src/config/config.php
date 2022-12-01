<?php 
define('BASE_URL', $_ENV['PWD']);

define('MYSQL_HOST', $_ENV['MYSQL_HOST']);
define('MYSQL_PORT', $_ENV['MYSQL_PORT']);
define('MYSQL_USER', $_ENV['MYSQL_USER']);
define('MYSQL_PASSWORD', $_ENV['MYSQL_PASSWORD']);
define('MYSQL_DATABASE', $_ENV['MYSQL_DATABASE']);
define("SOAP_API_KEY",  $_ENV['SOAP_API_KEY']);

define('PAGINATION_LIMIT', 10);

define("IMAGE_DIR", BASE_URL . "/public/img/");
define("AUDIO_DIR", BASE_URL . "/public/audio/");
?>