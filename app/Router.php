<?php
namespace App;

class Router {

    private $app;

    public function __construct($app)
    {
        $this->app = $app;
    }

    public function call($verb,$url,$action)
    {
        return $this->app->$verb($url,function() use ($action)
        {
            $action = explode('@',$action);
            $controllerName = $action[0] . 'Controller';
            $method = $action[1];
            $controllerPath = "\\AppController\\".$controllerName;
            $controller = new $controllerPath($this->app);
            call_user_func_array([$controller, $method],[]);
        });
    }

    public function get($url,$action)
    {
        return $this->call('get',$url,$action);
    }

    public function post($url,$action)
    {
        return $this->call('post',$url,$action);
    }
}