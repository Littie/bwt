<?php

/**
 * Application entry point
 */

ini_set('display_errors', 1);

require_once 'application/bootstrap.php';

$connection = new PDO("mysql:host=". DB_HOST .";dbname=". DB_NAME, DB_USER, DB_PASS);

Route::start(); // запускаем маршрутизатор

