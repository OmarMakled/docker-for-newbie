<?php
$host = 'db';
$dbname = 'db_test';
$username = 'omar';
$password = 'password';

try {
    $dsn = "mysql:host=$host;dbname=$dbname;charset=utf8mb4";
    $options = [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        PDO::ATTR_EMULATE_PREPARES => false,
    ];
    $pdo = new PDO($dsn, $username, $password, $options);
    echo "Connected to the database!";
} catch (PDOException $e) {
    echo 'Connection failed: ' . $e->getMessage();
}