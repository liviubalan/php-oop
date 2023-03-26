<?php

// MySQLi Object-Oriented
// sudo yum install php-mysqli
$hostname = 'localhost';
$username = 'username';
$password = 'password';
$database = null;
$port = 3306;

// Create connection
$conn = new mysqli($hostname, $username, $password, $database, $port);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error . "\n");
}
echo "Connected successfully\n";

$conn->close();
