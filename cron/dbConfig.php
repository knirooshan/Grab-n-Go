<?php

$dbHost = $_ENV['DB_HOST'];
$dbUser = $_ENV['DB_USERNAME'];
$dbPassword = $_ENV['DB_PASSWORD'];
$dbName = $_ENV['DB_DATABASE'];

date_default_timezone_set('Asia/Colombo'); // Set the timezone to Sri Lanka (Asia/Colombo)

$conn = new mysqli(
    $dbHost, //Database Type
    $dbUser, //Database Username
    $dbPassword, //Database Password
    $dbName //Database Name
);
