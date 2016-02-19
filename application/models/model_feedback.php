<?php

class Model_feedback extends Model
{

    function getFeedback() {
        $connection = Connection::getConnection();

        $statement = $connection->query('SELECT * from feedback');

        $statement->setFetchMode(PDO::FETCH_ASSOC);

        while ($row = $statement->fetch())
        {
            echo $row['message'] . ' ';
            echo $row['time'] . '\n';
        }
    }
}