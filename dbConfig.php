<?php 

$host = "localhost";
$user = "root";
$password = "";
$dbname = "odasco";
$dsn = "mysql:host={$host};dbname={$dbname}";

$pdo = new PDO($dsn, $user, $password);
$pdo->exec("SET time_zone = '+08:00';");

?>
