<?php


session_start();

setcookie('name', 'John', time() + 3600);

echo $_COOKIE['name'];


echo $_SESSION['name'];
echo '<br>';
echo $_SESSION['jwt_token'];


session_unset();
session_destroy();
