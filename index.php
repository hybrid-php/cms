<?php
set_time_limit(0);
error_reporting(E_ALL ^ E_NOTICE);

require_once 'vendor/autoload.php';

echo '<pre>';
var_dump(\Hybrid\Request::current());
echo '</pre>';
?>