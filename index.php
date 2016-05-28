<?php
require 'vendor/autoload.php';

// agent detection
$detect = new \Mobile_Detect;

$app = new \Slim\Slim([
    'templates.path' => 'views/',
    'debug' => true
]);
// environment
$app->space = 'dev';
$app->detection = $detect;
$app->app_path = dirname(__FILE__) . '/app/';
$app->views_path = dirname(__FILE__) . '/views/';
$app->public_path = dirname(__FILE__) . '/public/';

// Router
require $app->app_path.'routes.php';

$app->run();