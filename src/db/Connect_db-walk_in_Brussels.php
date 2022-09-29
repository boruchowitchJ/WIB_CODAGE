<?php
$host = "remotemysql.com";
$user = "qypIEJ70Uk";
$db = "qypIEJ70Uk";
$pwd = "LTkbwXTH1g";
$port = 3306;

try {
    $mysqlClient = new PDO("mysql:dbname=$db;port=$port;host=$host", $user, $pwd);
    $mysqlClient->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch(Exception $exception) {
    die('Oops, il y a eu problème : '.$exception->getMessage());
}
?>