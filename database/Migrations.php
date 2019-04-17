<?php

class Migrations 
{
    private $database;
    public $location;

    public function __construct()
    {
        global $app;
        $this->database = $app->providers['Database'];
        $this->location = __DIR__.'\migrations';
    }

    public function migrate()
    {
        foreach (new DirectoryIterator($this->location) as $file) {
            if($file->isDot()) continue;
            $pathname = $file->getPathname();
            $filename = $file->getFilename();
            printf("Migrating %s \n", $filename);
            $sql = file_get_contents($pathname); 
            $this->database->exec($sql);
            printf("Migrated %s \n", $filename);
        }
    }
}
