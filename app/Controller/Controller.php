<?php
namespace AppController;

class Controller {

    protected $app;

    public function __construct($app)
    {
        $this->app = $app;
    }

}