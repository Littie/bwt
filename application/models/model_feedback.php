<?php

class Model_feedback extends Model
{
    function getFeedback() {
        $STH = $DBC->query('SELECT * from feedback');

        $STH->setFetchMode(PDO::FETCH_ASSOC);

        while ($row = $STH->fetch())
        {
            echo $row['message'] . ' ';
            echo $row['time'] . '\n';
        }
    }
}