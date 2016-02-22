<?php

class Model_Login extends Model
{
    private $email;
    private $password;
    protected $connection;

    function __construct()
    {
        $this->connection = Connection::getConnection();
    }

    function checkAuthenticationData($email, $password)
    {

        $this->email = $email;
        $this->password = md5($password);

        $statement = $this->connection->prepare('select name from users where email = ? and password = ?');
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