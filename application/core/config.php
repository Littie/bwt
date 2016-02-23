<?php

define('DB_HOST', 'localhost');
define('DB_NAME', 'bwt_test');
define('DB_USER', 'admin');
define('DB_PASS', '12345');

$connection = new PDO("mysql:host=". DB_HOST .";dbname=". DB_NAME, DB_USER, DB_PASS);
