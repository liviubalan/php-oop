<?php

class Greeting
{
    public static function welcome()
    {
        echo "Hello World!\n";
    }

    public function __construct()
    {
        self::welcome();
    }
}

new Greeting();
