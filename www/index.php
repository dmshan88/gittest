<?php
if(version_compare(PHP_VERSION,'5.3.0','<'))  die('require PHP > 5.3.0 !');
define('APP_DEBUG',True);
//define('APP_STATUS','local');
define('APP_PATH','../app/');
require '../vendor/topthink/thinkphp/ThinkPHP/ThinkPHP.php';
