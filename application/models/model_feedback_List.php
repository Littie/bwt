<?php

class Model_Feedback_List extends Model
{

    function getFeedback() {
        $set = array();
        $i = 0;

        $connection = Connection::getConnection();

        $connection->query('SET NAMES utf8');

        $statement = $connection->query('SELECT users.name, feedback.message, feedback.time from users, feedback WHERE users.id = feedback.user_id');

        $statement->setFetchMode(PDO::FETCH_ASSOC);

        while ($row = $statement->fetch())
        {
            $set[$i++] = $row;
        }

        return $set;
    }
}