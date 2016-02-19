<?php

class Connection
{

    public $host = 'localhost';
    public $db_name = 'bwt_test';
    public $user = 'admin';
    public $password = '12345';
    private $connection;

    protected static $instance;

    private function __construct() {
        try {
            $this->connection = new PDO("mysql:host=$this->host;dbname=$this->db_name", $this->user, $this->password);
        } catch (PDOException $ex) {
            echo $ex->getMessage();
        }
    }

    static function getConnection()
    {
        if (self::$instance === null) {
            self::$instance = new self();
        }

        return self::$instance->connection;
    }

}