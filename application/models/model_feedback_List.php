<?php

class Model_Feedback_List extends Model
{

    private $dbConnection;

    function getFeedback() {
        $set = array();
        $i = 0;

        global $connection;
        $this->dbConnection = $connection;

        $this->dbConnection->query('SET NAMES utf8');

        $statement = $this->dbConnection->query('SELECT users.name, feedback.message, feedback.time from users, feedback WHERE users.id = feedback.user_id');

        $statement->setFetchMode(PDO::FETCH_ASSOC);

        while ($row = $statement->fetch())
        {
            $set[$i++] = $row;
        }

        $statement = $this->dbConnection->query('select guest_users.name, feedback.message, feedback.time from guest_users, feedback where guest_users.id = feedback.guest_id');

        $statement->setFetchMode(PDO::FETCH_ASSOC);

        while ($row = $statement->fetch())
        {
            $set[$i++] = $row;
        }

        return $set;
    }
}