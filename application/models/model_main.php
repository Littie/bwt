<?php


class Model_Main extends Model
{
    private $connection;

    function __construct()
    {
        $this->connection = Connection::getConnection();
    }

    function addUser($first_name, $last_name, $password, $confirm_password, $email, $sex = "", $birthday = "") {
        $date = DateTime::createFromFormat('Y-m-d', $birthday);
        $birthday = $date != false? $date->format('Y-m-d') : "";

        if ($password === $confirm_password && $first_name !== '' && $last_name !== '' && $email !== '') {
            $data = array($first_name, $last_name, md5($password), $email, $sex, $birthday);
            $statement = $this->connection->prepare('INSERT INTO users (name, surename, password, email, sex, birthday) VALUES (?, ?, ?, ?, ?, ?)');
            $statement->execute($data);

            return true;
        } else {
            return false;
        }
    }
}