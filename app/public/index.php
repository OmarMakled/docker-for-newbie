<?php

require_once __DIR__ . '/../vendor/autoload.php';

use App\Dump;
use App\Connection;

$host = 'db';
$dbname = 'db_test';
$username = 'omar';
$password = 'password';
$dsn = "mysql:host=$host;dbname=$dbname;charset=utf8mb4";

(new Connection)->connect($dsn, $username, $password);

echo (new Dump)->foo();