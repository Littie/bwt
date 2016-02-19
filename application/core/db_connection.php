<?php

$host = 'localhost';
$db_name = 'bwt_test';
$user = 'admin';
$password = '12345';

try {
    $DBC = new PDO("mysql:host=$host;dbname=$db_name", $user, $password);
} catch (PDOException $ex) {
    echo $ex->getMessage();
}

