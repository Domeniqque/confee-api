<?php

namespace Confee\Support\Routing;

abstract class RouterFile
{
    protected $options;

    /**
     * @var \Illuminate\Routing\Router
     */
    protected $router;
    
    public function __construct($options = [])
    {
        $this->options = $options;
        
        $this->router = app('router');
    }

    public function register()
    {
        $this->router->group($this->options, function () {
            $this->routes();
        });
    }

    abstract protected function routes();
}