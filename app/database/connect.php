<?php

$host = '127.0.0.1';
$user = 'root';
$password = 'LeoMessi10';
$db_name = 'cryptodate';

$conn = new MySQLi($host, $user, $password, $db_name);
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
if($conn->connect_error){
    die('Database Connection error '.$conn->connect_error);
}