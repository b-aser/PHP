<?php

use Aser\PhpApplication\WeatherService;

require_once __DIR__ . '/vendor/autoload.php';

$weatherService = new WeatherService();
$city = 'London'; 
$weather = $weatherService->getWeather($city);