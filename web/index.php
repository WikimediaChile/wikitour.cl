<?php

ini_set('display_errors', 'stdout');

include_once "../vendor/autoload.php";

$fat = \Base::instance();

$fat->config('../config.ini');

$fat->route('GET /', '\portada::now');
$fat->route('GET /@year', '\portada::year');

$fat->run();
