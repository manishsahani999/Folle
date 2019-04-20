<?php 

class App  
{
    public $providers = [];
    
    public function bind($provider)
    {
        $classname = str_replace("ServiceProvider", "", get_class($provider));
        $this->providers[$classname] = $provider;
    }
}
