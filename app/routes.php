<?php
$router = new \App\Router($app);
$router->get('/','Page@home')->name('root');