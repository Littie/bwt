<?php

class Connection
{

    public $host = 'localhost';
    public $db_name = 'bwt_test';
    public $user = 'admin';
    public $password = '12345';
    public $connection;

    public static $instance;

    private function _constructor() {
        try {
            $this->connection = new PDO("mysql:host=$this->host;dbname=$this->db_name", $this->user, $this->password);

/*            $STH = $DBC->query('SELECT * from feedback');

            $STH->setFetchMode(PDO::FETCH_ASSOC);

            while ($row = $STH->fetch()) {
                echo $row['message'] . ' ';
                echo $row['time'] . "\n";
            }*/

        } catch (PDOException $ex) {
            echo $ex->getMessage();
        }
    }

    static function getConnection()
    {
        if (!static::$instance) {
            static::$instance = new Connection();
        }

        return static::$instance->connection;
    }

}