<?php

class Model_Login extends Model
{
    private $email;
    private $password;

    function checkAuthenticationData($email, $password)
    {

        $this->email = $email;
        $this->password = md5($password);

        $connection = Connection::getConnection();

//        $statement = $connection->query('SELECT name FROM users WHERE email = ' . $email . ' AND password = ' . $password);
        $statement = $connection->prepare('select name from users where email = ? and password = ?');
        $statement->execute(array($this->email, $this->password));

        $statement->setFetchMode(PDO::FETCH_OBJ);

        $row = $statement->fetch();

        if ($row) {
            return true;
        } else {
            return false;
        }
    }
}