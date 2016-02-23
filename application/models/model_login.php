<?php

class Model_Login extends Model
{
    private $email;
    private $password;
    protected $dbConnection;

    function __construct()
    {
        global $connection;
        $this->dbConnection = $connection;
    }

    function checkAuthenticationData($email, $password)
    {

        $this->email = $email;
        $this->password = md5($password);

        $statement = $this->dbConnection->prepare('select name from users where email = ? and password = ?');
        $statement->execute(array($this->email, $this->password));

        $statement->setFetchMode(PDO::FETCH_OBJ);

        $row = $statement->fetch();

        if ($row) {
            return $row->name;
        } else {
            return false;
        }
    }
}