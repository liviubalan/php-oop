<?php

// PDO: PHP Data Objects
require 'db.php';

try {
    $conn = new PDO("mysql:host=$hostname;dbname=$database;port=$port", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//    echo "Connected successfully\n";
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage() . "\n";
}
