<?php 

class App  
{
    public $routing;
    public $providers = [];

    public function bindRouting($routingServiceProvider)
    {
        $this->routing = $routingServiceProvider;
    }

    public function bind($provider)
    {
        $classname = str_replace("ServiceProvider", "", get_class($provider));
        $this->providers[$classname] = $provider;
        // var_dump($this->providers);
    }
}
