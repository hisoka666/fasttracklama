<?php 
/*$username = 'admin_userdb';
$password = 'aptx4869';

$con = new PDO('mysql:host=localhost;dbname=admin_userdb', $username, $password);*/


    $dsn = getenv('MYSQL_DSN');
    $user = getenv('MYSQL_USER');
    $password = getenv('MYSQL_PASSWORD');
    if (!isset($dsn, $user) || false === $password) {
        throw new Exception('Set MYSQL_DSN, MYSQL_USER, and MYSQL_PASSWORD environment variables');
    }

    $con = new PDO($dsn, $user, $password); 


$con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


?>