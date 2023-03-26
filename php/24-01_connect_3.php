<?php

// MySQLi Procedural
require 'include/db.php';

// Create connection
$conn = mysqli_connect($hostname, $username, $password, $database, $port);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error() . "\n");
}
echo "Connected successfully\n";

mysqli_close($conn);
