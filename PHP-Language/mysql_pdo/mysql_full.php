<?php


$host = 'localhost';
$user = 'root';
$password = '';
$dbname = 'blog';

try {
    $connection = new PDO("mysql:host:{$host}; dbname={$dbname}", $user, $password);
    echo "Connected successfully";
} catch (Exception $exception) {
    echo $exception->getMessage();
}
