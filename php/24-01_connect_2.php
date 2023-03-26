<?php

// MySQLi Object-Oriented
require 'include/db.php';

// Create connection
$conn = new mysqli($hostname, $username, $password, $database, $port);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error . "\n");
}
echo "Connected successfully\n";

$conn->close();
