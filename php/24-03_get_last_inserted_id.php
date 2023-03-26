<?php

require 'include/db_begin.php';

$sql = "INSERT INTO `emag`.`cookie` (`name`, `group_id`, `created_at`, `updated_at`)
        VALUES ('cookie-2', 2, '2023-03-26 17:19:13', '2023-03-26 17:19:15')";
$conn->exec($sql);

$last_id = $conn->lastInsertId();
echo "New record created successfully. Last inserted ID is: $last_id\n";

require 'include/db_end.php';
