<?php
$host = 'localhost';
$db = 'sklad';
$user = 'timoxin';
$pass = '3tRAhc5pl0r43lzX';
$charset = 'utf8';

$dsn = "mysql:host=$host;dbname=$db;charset=$charset";
$opt = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES   => false,
];
$pdo = new PDO($dsn, $user, $pass, $opt);

// $dbhost = 'localhost';
// $dbuser = 'timoxin';
// $dbpass = '3tRAhc5pl0r43lzX';
// $db = 'sklad';
// $conn = mysqli_connect($dbhost, $dbuser, $dbpass, $db) or die($conn);
