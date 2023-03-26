<?php

require 'include/db_begin.php';

$sql = "INSERT INTO `emag`.`cookie` (`name`, `group_id`, `created_at`, `updated_at`)
        VALUES (:name, :group_id, :created_at, :updated_at)";
$stmt = $conn->prepare($sql);
$stmt->bindParam(':name', $name);
$stmt->bindParam(':group_id', $group_id);
$stmt->bindParam(':created_at', $created_at);
$stmt->bindParam(':updated_at', $updated_at);

$name = 'cookie-3';
$group_id = 3;
$created_at = '2023-03-26 17:32:13';
$updated_at = '2023-03-26 17:32:15';
$stmt->execute();

$name = 'cookie-4';
$group_id = 4;
$created_at = '2023-03-26 17:33:13';
$updated_at = '2023-03-26 17:33:15';
$stmt->execute();

require 'include/db_end.php';
