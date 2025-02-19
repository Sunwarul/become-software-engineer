<?php


session_start();


$_SESSION['name'] = 'Sunwarul Islam';
$_SESSION['jwt_token'] = '3432432432dwrarewdsadfs';


echo $_SESSION['name'];
echo "<br>";
echo $_SESSION['jwt_token'];


// session_unset();
// session_destroy();