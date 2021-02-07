<?php

$username = 'root';
$password = '';
$host = 'localhost';
$dbname = 'blog';

try {
    // $connection = new PDO("mysql:host=localhost;dbname=blog", $username, $password);
    $connection = new PDO("mysql:host={$host};dbname={$dbname}", $username, $password);
    $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully";
} catch (Exception $exception) {
    echo 'Error ' . $exception->getMessage() . PHP_EOL;
} finally {
    $connection = null;
}
