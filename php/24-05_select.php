<?php

require 'include/db_begin.php';

$sql = "SELECT * FROM `emag`.`cookie`
        ORDER BY id DESC
        LIMIT 2";
$stmt = $conn->prepare($sql);
$stmt->execute();
while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
    var_dump($row);
}

require 'include/db_end.php';
