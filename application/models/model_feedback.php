<?php

class Model_Feedback extends Model
{
    private $dbConnection;

    function __construct()
    {
        global $connection;
        $this->dbConnection = $connection;
    }

    function sendFeedback($name, $message) {
        $statement = $this->dbConnection->prepare('INSERT INTO feedback (user_id, message, time) SELECT id, ?, ? FROM users WHERE name = ?');
        $statement->execute(array($message, date("Y-m-d H:i:s"), $name));
    }

    function sendGuestFeedback($name, $email, $message) {
        $statement = $this->dbConnection->prepare('INSERT INTO guest_users (name, email, message) VALUES (?, ?, ?)');
        $statement->execute(array($name, $email, $message));
    }
}