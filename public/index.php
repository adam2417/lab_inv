<?php	
define('DS', DIRECTORY_SEPARATOR);
define('ROOT', dirname(dirname(__FILE__)));

$url = $_GET['url'];

require_once (ROOT . DS . 'config' . DS . 'config.php');
require_once (ROOT . DS . 'library' . DS . 'bootstrap.php');

$base_url = BASE_PATH;

require_once (ROOT . DS . 'library' . DS . 'sessions.class.php');

