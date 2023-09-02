<?php

require_once  realpath('vendor/autoload.php');

use App\Controllers\WeatherController;

$run = new WeatherController();
$run->run();
