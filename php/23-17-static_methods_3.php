<?php

class A
{
    public static function welcome()
    {
        echo "Hello World!\n";
    }
}

class B
{
    public function message()
    {
        A::welcome();
    }
}

$obj = new B();
echo $obj->message();
