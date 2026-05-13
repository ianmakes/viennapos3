<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);

$host = 'localhost';
$db   = 'u826514770_viennapos3';
$user = 'u826514770_viennapos3';
$pass = 'mE4sU3h';
$charset = 'utf8mb4';

$dsn = "mysql:host=$host;dbname=$db;charset=$charset";
$options = [
    PDO::ATTR_ERRORS => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES   => false,
];

echo "Testing PDO connection to $host...<br>";

try {
     $pdo = new PDO($dsn, $user, $pass, $options);
     echo "Connected successfully via PDO";
} catch (\PDOException $e) {
     echo "Connection failed: " . $e->getMessage();
}
?>
