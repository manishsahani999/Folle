<?php

class DatabaseConnection
{
    private $host;
    private $username;
    private $database;
    private $password;

    public $connection;

    public function setDatabaseConfigs(array $params = [])
    {
        $this->host = $params['host'];
        $this->username = $params['username'];
        $this->database = $params['database'];
        $this->password = $params['password'];
    }

    public function connect()
    {
        $this->connection = null;

        try {
            $this->connection = new PDO("mysql:host=" . $this->host . ";dbname=" . $this->database, $this->username, $this->password);
            $this->connection->exec("set name utf8");
        } catch (PDOException $exception) {
            echo "Error ". $exception->getMessage();
        }
    }

    public function query()
    {
        $query = "SELECT * FROM users";  
 
        $stmt = $this->connection->prepare( $query );
        $stmt->execute();
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
        var_dump($row);
        return $stmt;
    }

    public function exec($sql)
    {
        $stmt = $this->connection->prepare($sql);
        $stmt->execute();
        return $stmt;
    }

    public function test()
    {
        if ($this->connection != NULL)
            echo "ok";
    }
}