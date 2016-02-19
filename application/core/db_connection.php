<?php

$host = 'localhost';
$db_name = 'bwt_test';
$user = 'admin';
$password = '12345';

try {
    $DBC = new PDO("mysql:host=$host;dbname=$db_name", $user, $password);

    $STH = $DBC->query('SELECT * from feedback');

    $STH->setFetchMode(PDO::FETCH_ASSOC);

    while ($row = $STH->fetch()) {
        echo $row['message'] . ' ';
        echo $row['time'] . "\n";
    }

} catch (PDOException $ex) {
    echo $ex->getMessage();
}

