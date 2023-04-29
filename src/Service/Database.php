<?php

class Database {
    private $connection;
    private $config;
    function __construct()
    {
        $this->establishConnection();
        $this->config = require './config/database.php';
    }

    public function setQuery()
    {

    }

    public function fetchResult()
    {

    }

    private function establishConnection()
    {
        
        $this->connection = new PDO("mysql:host={$this->config['HOST']};dbname={$this->config['NAME']}", $this->config['USERNAME'], $this->config['PASSWORD']);;
        // set the PDO error mode to exception
        $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
}
?>