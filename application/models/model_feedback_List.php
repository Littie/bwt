<?php

class Model_Feedback_List extends Model
{

    function getFeedback() {
        $set = array();
        $i = 0;

        $connection = Connection::getConnection();

        $connection->query('SET NAMES utf8');

        $statement = $connection->query('SELECT * from feedback');

        $statement->setFetchMode(PDO::FETCH_ASSOC);

        while ($row = $statement->fetch())
        {
/*            echo $row['message'] . ' ';
            echo $row['time'] . '\n';*/
            $set[$i++] = $row;
        }

        return $set;
    }
}