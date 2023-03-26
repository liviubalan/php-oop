<?php

class Pi
{
    public static $value = 3.14159;
}

class X extends Pi
{
    public function xStatic()
    {
        return parent::$value;
    }
}

echo x::$value . "\n";

$x = new x();
echo $x->xStatic() . "\n";
