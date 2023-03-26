<?php

// "iterable" pseudo-type was introduced in PHP 7.1
// Can be used as a data type for function arguments and function return values
function printIterable(iterable $myIterable)
{
    foreach ($myIterable as $item) {
        echo $item;
    }
    echo "\n";
}

$arr = ["a", "b", "c"];
printIterable($arr);
