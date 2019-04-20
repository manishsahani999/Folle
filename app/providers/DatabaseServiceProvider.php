<?php

require __DIR__.'/../services/DatabaseConnection.php';

class DatabaseServiceProvider extends DatabaseConnection
{
    private $configs;

    public function __construct(array $params = [])
    {
        $this->configs = $params;
        $this->register();
    }

    public function boot() {
        $this->connect();
    }

    public function register()
    {
        $this->setDatabaseConfigs($this->configs);
    }
}
