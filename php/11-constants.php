<?php

// Constants are like variables except that once they are defined they cannot be changed or undefined.

// case-sensitive
define('GREETING', 'Hello world');
var_dump(GREETING);
//var_dump(greeting); // Error

define('GREETING', 'Hello world', true);
var_dump(greeting);

function f()
{
    var_dump(GREETING);
}

f();
