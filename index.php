<?php
require 'vendor/autoload.php';

// agent detection
$detect = new \Mobile_Detect;

$app = new \Slim\Slim([
    'templates.path' => 'resources/views',
    'debug' => true
]);

// Load Twig
$app->view = new \Slim\Views\Twig();
$app->view->setTemplatesDirectory("resources/views");

// Twig configuration
$view = $app->view();
$view->parserOptions = ['debug' => true];
$view->parserExtensions = [new \Slim\Views\TwigExtension()];
$view->parserExtensions = array(new Twig_Extension_Debug());

// environment
$app->space = 'dev';
$app->detection = $detect;
$app->app_path = dirname(__FILE__) . '/app/';
$app->views_path = dirname(__FILE__) . '/views/';
$app->public_path = dirname(__FILE__) . '/public/';

// Router
require $app->app_path.'routes.php';

$app->run();