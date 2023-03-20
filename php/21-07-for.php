<?php

$cars = array(
    array('Volvo', 'Sweden'),
    array('BMW', 'Germany'),
);

for ($i = 0; $i < count($cars); $i++) {
    for ($j = 0; $j < count($cars[$i]); $j++) {
        echo $cars[$i][$j] . ', ';
    }
}
echo "\n";
